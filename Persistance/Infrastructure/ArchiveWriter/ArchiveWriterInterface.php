<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ArchiveWriter;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

interface ArchiveWriterInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory, ConnectionParametersInterface $connection_parameters );
    public function write( string $guid, string $data ): void;
}