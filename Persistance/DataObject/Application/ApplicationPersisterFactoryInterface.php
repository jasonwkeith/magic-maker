<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Persistance\Infrastructure\Datetime\DateTimeDataObjectFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

interface ApplicationPersisterFactoryInterface
{
    public function __construct
    (
        ExceptionFactoryInterface $exception_Factory, 
        WriterConnectionInterface $writer, 
        ReaderConnectionInterface $reader, 
        DateTimeDataObjectFactoryInterface $date_time_factory,         
        ApplicationDataObjectFactoryInterface $data_object_factory 
        );    
    public function create(): ApplicationPersisterInterface;
}