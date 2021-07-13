<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

interface PersonPersisterFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, DateTimeDataObjectFactoryInterface $date_time_factory, HistoryDataObjectFactoryInterface $history_factory, PersonDataObjectFactoryInterface $data_object_factory );
    public function create() : PersonPersisterInterface;
}