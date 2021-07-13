<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;

interface HistoryMapperInterface
{
    public function __construct( HistoryFactoryInterface $history_factory, HistoryDataObjectFactoryInterface $history_data_object_factory, DateTimeMapperInterface $Datetime_mapper );
    public function createEntity( HistoryDataObjectInterface $data_object ): HistoryInterface;
}