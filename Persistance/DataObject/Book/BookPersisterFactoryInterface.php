<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

interface BookPersisterFactoryInterface
{
    public function __construct
    ( 
        ExceptionFactoryInterface $exception_Factory, 
        WriterConnectionInterface $writer, 
        ReaderConnectionInterface $reader, 
        DatetimeDataObjectFactoryInterface $datetime_data_object_factory, 
        HistoryDataObjectFactoryInterface $history_data_object_factory, 
        BookDataObjectFactoryInterface $data_object_factory 
    );    
    public function create(): BookPersisterInterface;
}