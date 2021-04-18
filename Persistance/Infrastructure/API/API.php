<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\API;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionFactoryInterface;

use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;

use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersFactory;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\FileReaderConnectionFactory;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\FileWriterConnectionFactory;

class API implements APIInterface
{
    public function __construct
    (   string $storage_path,
        ExceptionFactoryInterface $exception_factory,
        ConnectionParametersFactoryInterface $connection_parameters_factory,
        ReaderConnectionFactoryInterface $reader_connection_factory,
        WriterConnectionFactoryInterface $writer_connection_factory 
    )
    {
        $this->storage_path = $storage_path;
        $this->exception_factory = $exception_factory;
        $this->connection_parameters_factory = $connection_parameters_factory;
        $this->reader_connection_factory = $reader_connection_factory;
        $this->writer_connection_factory = $writer_connection_factory;      
    }
    
    public function createFileConnectionParameters( string $path, string $file_handle, string $file_extension ):  ConnectionParametersInterface
    {
        return $this->connection_parameters_factory->createFileConnection( $path, $file_handle, $file_extension );
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