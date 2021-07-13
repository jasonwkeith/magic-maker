<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ArchiveReader;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

interface ArchiveReaderInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory, ConnectionParametersInterface $connection_parameters );
    public function read( string $guid ): string;
}