<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\API;

use JasonWKeith\Domain\Boundary\APIInterface as DomainAPIInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersFactory;
use JasonWKeith\Persistance\Infrastructure\ArchiveReader\ArchiveReaderFactory;
use JasonWKeith\Persistance\Infrastructure\ArchiveWriter\ArchiveWriterFactory;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\FileReaderConnectionFactory;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\FileWriterConnectionFactory;

class APIFactory implements APIFactoryInterface
{
    public function create( string $storage_path, DomainAPIInterface $domain_api, ExceptionFactoryInterface $exception_factory ): APIInterface
    {
        return new API
        (   
            $storage_path,
            $domain_api,
            $exception_factory,
            new ArchiveReaderFactory( $exception_factory ),
            new ArchiveWriterFactory( $exception_factory ),
            new ConnectionParametersFactory,
            new FileReaderConnectionFactory( $exception_factory ) ,
            new FileWriterConnectionFactory( $exception_factory ) 
        );
    }    
}