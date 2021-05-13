<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

interface ApplicationPersisterFactoryInterface
{
    public function __construct
    (
        ExceptionFactoryInterface $exception_Factory, 
        WriterConnectionInterface $writer, 
        ReaderConnectionInterface $reader, 
        DatetimeDataObjectFactoryInterface $date_time_factory,  
        HistoryDataObjectFactoryInterface $history_factory,
        ApplicationDataObjectFactoryInterface $data_object_factory 
        );    
    public function create(): ApplicationPersisterInterface;
}