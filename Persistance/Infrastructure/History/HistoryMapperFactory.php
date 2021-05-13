<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeMapperInterface;

class HistoryMapperFactory implements HistoryMapperFactoryInterface
{
    public function __construct( HistoryFactoryInterface $entity_factory, HistoryDataObjectFactoryInterface $history_data_object_factory, DatetimeMapperInterface $date_time_mapper )
    {
        $this->entity_factory = $entity_factory;
        $this->date_time_mapper = $date_time_mapper;
        $this->history_data_object_factory = $history_data_object_factory;
    }

    public function create(): HistoryMapperInterface
    {
        return new HistoryMapper( $this->entity_factory, $this->history_data_object_factory, $this->date_time_mapper );
    }
}