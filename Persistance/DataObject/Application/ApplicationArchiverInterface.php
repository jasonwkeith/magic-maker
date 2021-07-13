<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ArchiveReader\ArchiveReaderInterface;
use JasonWKeith\Persistance\Infrastructure\ArchiveWriter\ArchiveWriterInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;

interface ApplicationArchiverInterface
{
    public function __construct( ExceptionFactoryInterface $exception_Factory, ArchiveReaderInterface $archive_reader, ArchiveWriterInterface $archive_writer, DateTimeDataObjectFactoryInterface $datetime_data_object_factory );
    public function write( ApplicationDataObjectInterface $data_object ): void;
    public function read( string $guid ): ApplicationArchiveCollectionInterface;
}