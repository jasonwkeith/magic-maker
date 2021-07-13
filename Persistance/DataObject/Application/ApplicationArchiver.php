<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ArchiveReader\ArchiveReaderInterface;
use JasonWKeith\Persistance\Infrastructure\ArchiveWriter\ArchiveWriterInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\Archiver\ArchiverTrait;

class ApplicationArchiver implements ApplicationArchiverInterface
{
    use ExceptionFactoryTrait;
    use ArchiverTrait;

    public function __construct( ExceptionFactoryInterface $exception_Factory, ArchiveReaderInterface $archive_reader, ArchiveWriterInterface $archive_writer, DateTimeDataObjectFactoryInterface $datetime_data_object_factory )
    {
        $this->setExceptionFactory( $exception_Factory );
        $this->setDateTimeDataObjectFactory( $datetime_data_object_factory );
        $this->archive_reader = $archive_reader;
        $this->archive_writer = $archive_writer;
    }
    
    public function write( ApplicationDataObjectInterface $data_object ): void
    {
        $history_action = $this->getDataObjectHistoryAction( $data_object->getHistory() );
        $this->writeHistory( $history_action, $data_object );
    }
    
    public function read( string $guid ): ApplicationArchiveCollectionInterface
    {
        $standard_objects =  $this->readStandardObjects( $guid );
        return $this->createDataObject( $standard_objects );
    }
}