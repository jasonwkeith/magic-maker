<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ArchiveWriter;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

class ArchiveWriterFactory implements ArchiveWriterFactoryInterface
{

    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;
    }
    
    public function create( ConnectionParametersInterface $connection_parameters ): ArchiveWriterInterface
    {
        return new ArchiveWriter( $this->exception_factory, $connection_parameters );    
    }
}