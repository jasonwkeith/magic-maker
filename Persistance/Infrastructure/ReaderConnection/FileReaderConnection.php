<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ReaderConnection;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;

class FileReaderConnection implements ReaderConnectionInterface
{
    use FileHandlerTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory, ConnectionParametersInterface $connection_parameters )
    {
        $this->setExceptionFactory( $exception_factory );
        $this->connection_parameters = $connection_parameters->getParameters();    
        $this->validatePath( $this->connection_parameters[ ConnectionParametersInterface::PATH ] );
        $this->validateFilePath( $this->connection_parameters[ ConnectionParametersInterface::FILE_PATH ] );        
    }
    
    public function read(): string
    {
        $resource = $this->getFileResource( $this->connection_parameters[ ConnectionParametersInterface::FILE_PATH ], 'r' ) ;
        $length = $this->getFileSize( $this->connection_parameters[ ConnectionParametersInterface::FILE_PATH ] );

        return $this->readFileResource( $resource, $length );               
    }
}