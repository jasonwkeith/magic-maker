<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperInterface;

interface ApplicationMapperFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $entity_factory, ApplicationDataObjectFactoryInterface $data_object_factory, DateTimeMapperInterface $date_time_mapper, HistoryFactoryInterface $history_factory );
    public function create(): ApplicationMapperInterface;
}