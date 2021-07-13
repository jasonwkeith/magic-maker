<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

class UserPersisterFactory implements UserPersisterFactoryInterface
{
    public function __construct
    ( 
        ExceptionFactoryInterface $exception_Factory, 
        WriterConnectionInterface $writer, 
        ReaderConnectionInterface $reader, 
        DateTimeDataObjectFactoryInterface $datetime_data_object_factory, 
        HistoryDataObjectFactoryInterface $history_data_object_factory,             
        UserDataObjectFactoryInterface $data_object_factory
    )
    {
        $this->exception_factory = $exception_Factory;
        $this->writer = $writer;
        $this->reader = $reader;
        $this->datetime_data_object_factory = $datetime_data_object_factory;
        $this->history_data_object_factory = $history_data_object_factory;        
        $this->data_object_factory = $data_object_factory;
    }
    public function create(): UserPersisterInterface
    {
        return new UserPersister( $this->exception_factory, $this->writer, $this->reader, $this->datetime_data_object_factory, $this->history_data_object_factory, $this->data_object_factory );
    }

}