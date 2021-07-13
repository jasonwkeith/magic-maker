<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperInterface;

interface HistoryMapperFactoryInterface
{
    public function __construct( HistoryFactoryInterface $entity_factory, HistoryDataObjectFactoryInterface $history_data_object_factory, DateTimeMapperInterface $Datetime_mapper );
    public function create(): HistoryMapperInterface;
}