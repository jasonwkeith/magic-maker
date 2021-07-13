<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ArchiveReader\ArchiveReaderInterface;
use JasonWKeith\Persistance\Infrastructure\ArchiveWriter\ArchiveWriterInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;

class ApplicationArchiverFactory implements ApplicationArchiverFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory, ArchiveReaderInterface $archive_reader, ArchiveWriterInterface $archive_writer, DateTimeDataObjectFactoryInterface $datetime_data_object_factory )
    {
        $this->exception_factory = $exception_factory;
        $this->archive_reader = $archive_reader;
        $this->archive_writer = $archive_writer;
        $this->datetime_data_object_factory = $datetime_data_object_factory;
    }
    
    public function create(): ApplicationArchiverInterface
    {
        return new ApplicationArchiver
        ( 
            $this->exception_factory,
            $this->archive_reader,
            $this->archive_writer,
            $this->datetime_data_object_factory
        );
    }
}