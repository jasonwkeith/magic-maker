<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

class PersonPersisterFactory implements PersonPersisterFactoryInterface
{
    public function __construct
    ( 
        ExceptionFactoryInterface $exception_factory, 
        WriterConnectionInterface $writer, 
        ReaderConnectionInterface $reader, 
        DatetimeDataObjectFactoryInterface $datetime_data_object_factory, 
        HistoryDataObjectFactoryInterface $history_data_object_factory, 
        PersonDataObjectFactoryInterface $data_object_factory 
    )
    {
        $this->exception_factory = $exception_factory;
        $this->writer = $writer;
        $this->reader = $reader;
        $this->datetime_data_object_factory = $datetime_data_object_factory;
        $this->history_data_object_factory = $history_data_object_factory;
        $this->data_object_factory = $data_object_factory;
    }  
    
    public function create() : PersonPersisterInterface
    {
        return new PersonPersister
        ( 
            $this->exception_factory, 
            $this->writer, 
            $this->reader, 
            $this->datetime_data_object_factory, 
            $this->history_data_object_factory, 
            $this->data_object_factory 
            );
    }

}