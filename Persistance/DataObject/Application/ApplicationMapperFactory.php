<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperInterface;

class ApplicationMapperFactory implements ApplicationMapperFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $entity_factory, ApplicationDataObjectFactoryInterface $data_object_factory, DateTimeMapperInterface $date_time_mapper , HistoryFactoryInterface $history_factory )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
        $this->date_time_mapper = $date_time_mapper;
        $this->history_factory = $history_factory;
    }

    public function create(): ApplicationMapperInterface
    {
        return new ApplicationMapper( $this->entity_factory, $this->data_object_factory, $this->date_time_mapper, $this->history_factory );
    }
}