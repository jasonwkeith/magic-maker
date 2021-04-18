<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\WriterConnection;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;

class FileWriterConnection implements WriterConnectionInterface
{
    use FileHandlerTrait;
    use ExceptionFactoryTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory, ConnectionParametersInterface $connection_parameters )
    {
        $this->setExceptionFactory( $exception_factory );
        $this->connection_parameters = $connection_parameters->getParameters();    
        $this->validatePath( $this->connection_parameters[ ConnectionParametersInterface::PATH ] );
    }
    
    public function write( string $data ): void
    {
        $resource = $this->getFileResource( $this->connection_parameters[ ConnectionParametersInterface::FILE_PATH ], 'w+' ) ;
        fwrite( $resource, $data );
        fclose( $resource );
    }
}