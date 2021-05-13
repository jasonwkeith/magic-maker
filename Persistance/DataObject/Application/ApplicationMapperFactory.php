<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

class ApplicationMapperFactory implements ApplicationMapperFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $entity_factory, ApplicationDataObjectFactoryInterface $data_object_factory, HistoryMapperInterface $history_mapper  )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
        $this->history_mapper = $history_mapper;
    }

    public function create(): ApplicationMapperInterface
    {
        return new ApplicationMapper( $this->entity_factory, $this->data_object_factory, $this->history_mapper );
    }
}