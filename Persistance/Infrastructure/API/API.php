<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\API;

use JasonWKeith\Domain\Boundary\APIInterface as DomainAPIInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

use JasonWKeith\Persistance\Infrastructure\ArchiveReader\ArchiveReaderFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ArchiveWriter\ArchiveWriterFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionFactoryInterface;

use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;

use JasonWKeith\Persistance\DataObject\Application\ApplicationDataObjectFactory;
use JasonWKeith\Persistance\DataObject\Application\ApplicationMapperFactory;
use JasonWKeith\Persistance\DataObject\Application\ApplicationMapperInterface;

use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactory;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperFactory;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperInterface;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactory;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperFactory;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersFactory;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\FileReaderConnectionFactory;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\FileWriterConnectionFactory;

class API implements APIInterface
{
    public function __construct
    (   
        string $storage_path,
        DomainAPIInterface $domain_api,
        ExceptionFactoryInterface $exception_factory,
        ArchiveReaderFactoryInterface $archive_reader_factory,
        ArchiveWriterFactoryInterface $archive_writer_factory,
        ConnectionParametersFactoryInterface $connection_parameters_factory,
        ReaderConnectionFactoryInterface $reader_connection_factory,
        WriterConnectionFactoryInterface $writer_connection_factory 
    )
    {
        $this->storage_path = $storage_path;
        $this->exception_factory = $exception_factory;
        $this->connection_parameters_factory = $connection_parameters_factory;
        $this->domain_api = $domain_api;
        $this->archive_reader_factory = $archive_reader_factory;
        $this->archive_writer_factory = $archive_writer_factory;
        $this->reader_connection_factory = $reader_connection_factory;
        $this->writer_connection_factory = $writer_connection_factory;      
    }
    
    public function createApplicationMapper(): ApplicationMapperInterface
    {
        $factory = new ApplicationMapperFactory( $this->domain_api->createApplicationFactory(), new ApplicationDataObjectFactory, $this->createHistoryMapper() );
        return $factory->create();
    }    
    
    public function createArchiveReader( ConnectionParametersInterface $connection_parameters )
    {
        return $this->archive_reader_factory->create( $connection_parameters );
    }
    
    public function createArchiveWriter( ConnectionParametersInterface $connection_parameters )
    {
        return $this->archive_writer_factory->create( $connection_parameters );
    }    
    
    public function createDateTimeMapper(): DateTimeMapperInterface
    {
        $factory = new DateTimeMapperFactory( $this->domain_api->createDateTimeFactory(), new DateTimeDataObjectFactory );
        return $factory->create();
    }      
    
    public function createFileConnectionParameters( string $path, string $file_handle, string $file_extension ):  ConnectionParametersInterface
    {
        return $this->connection_parameters_factory->createFileConnection( $path, $file_handle, $file_extension );
    }
    
    public function createHistoryMapper(): HistoryMapperInterface
    {
        $factory = new HistoryMapperFactory( $this->domain_api->createHistoryFactory(), new HistoryDataObjectFactory, $this->createDateTimeMapper() );
        return $factory->create();
    }     
    
    public function createReaderConnection( ConnectionParametersInterface $connection_parameters ):  ReaderConnectionInterface
    {
        return $this->reader_connection_factory->create( $connection_parameters );
    } 
    
    public function createWriterConnection( ConnectionParametersInterface $connection_parameters ):  WriterConnectionInterface
    {
        return $this->writer_connection_factory->create( $connection_parameters );
    }    
    
    public function getStoragePath(): string
    {
        return $this->storage_path;
    }
}