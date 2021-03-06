<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

class PersonMapperFactory implements PersonMapperFactoryInterface
{
    public function __construct( PersonFactoryInterface $person_factory, PersonDataObjectFactoryInterface $person_data_object_factory, HistoryMapperInterface $history_mapper  )
    {
        $this->person_factory = $person_factory;
        $this->person_data_object_factory = $person_data_object_factory;
        $this->history_mapper = $history_mapper;
    }

    public function create(): PersonMapperInterface
    {
        return new PersonMapper( $this->person_factory, $this->person_data_object_factory, $this->history_mapper );
    }
}