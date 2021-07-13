<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ArchiveReader;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

class ArchiveReaderFactory implements ArchiveReaderFactoryInterface
{

    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;
    }
    
    public function create( ConnectionParametersInterface $connection_parameters ): ArchiveReaderInterface
    {
        return new ArchiveReader( $this->exception_factory, $connection_parameters );    
    }
}