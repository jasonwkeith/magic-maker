<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ArchiveWriter;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

interface ArchiveWriterFactoryInterface
{

    public function __construct( ExceptionFactoryInterface $exception_factory );
    public function create( ConnectionParametersInterface $connection_parameters ): ArchiveWriterInterface;
}