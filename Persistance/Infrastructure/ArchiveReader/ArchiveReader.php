<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ArchiveReader;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;

class ArchiveReader implements ArchiveReaderInterface
{
    use FileHandlerTrait;

    public function __construct( ExceptionFactoryInterface $exception_factory, ConnectionParametersInterface $connection_parameters )
    {
        $this->setExceptionFactory( $exception_factory );
        $this->connection_parameters = $connection_parameters->getParameters();    
    }
    
    public function read( string $guid ): string
    {
        $file_path = $this->connection_parameters[ ConnectionParametersInterface::PATH ] . $guid . "." . $this->connection_parameters[ ConnectionParametersInterface::FILE_EXTENSION ];
        $mode = "r";
        
        if( $this->isFilePathInvalid( $file_path) )
        {
            $mode = "w+";
        }
        else
        {
            $this->validateFilePath( $file_path );                
        }

        $resource = $this->getFileResource( $file_path, $mode ) ;
        $length = $this->getFileSize( $file_path );

        return $this->readFileResource( $resource, $length );    
    }
}