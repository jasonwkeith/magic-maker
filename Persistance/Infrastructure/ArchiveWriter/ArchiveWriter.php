<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ArchiveWriter;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;

class ArchiveWriter implements ArchiveWriterInterface
{
    use FileHandlerTrait;

    public function __construct( ExceptionFactoryInterface $exception_factory, ConnectionParametersInterface $connection_parameters )
    {
        $this->setExceptionFactory( $exception_factory );
        $this->connection_parameters = $connection_parameters->getParameters();    
        $this->validatePath( $this->connection_parameters[ ConnectionParametersInterface::PATH ] );
    }
    
    public function write( string $guid, string $data ): void
    {
        $file_path = $this->connection_parameters[ ConnectionParametersInterface::PATH ] . "/" . $guid . "." . $this->connection_parameters[ ConnectionParametersInterface::FILE_EXTENSION ];
        $resource = $this->getFileResource( $file_path, 'w+' ) ;
        fwrite( $resource, $data );
        fclose( $resource );
    }
}