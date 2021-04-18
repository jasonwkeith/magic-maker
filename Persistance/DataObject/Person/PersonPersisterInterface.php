<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

interface PersonPersisterInterface
{
    public function __construct( ExceptionFactoryInterface $exception_Factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, PersonDataObjectFactoryInterface $data_object_factory );
    public function write( PersonDataObjectInterface $data_object ): void;
    public function read( string $guid ): PersonDataObjectInterface;
    public function remove( string $guid ): void;
}