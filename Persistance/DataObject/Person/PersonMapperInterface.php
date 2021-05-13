<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

interface PersonMapperInterface
{
    public function __construct( PersonFactoryInterface $person_factory, PersonDataObjectFactoryInterface $person_data_object_factory, HistoryMapperInterface $history_mapper );
    public function createDataObject( PersonInterface $person ): PersonDataObjectInterface;
    public function createEntity( PersonDataObjectInterface $data_object ): PersonInterface;
    public function createEntityCollection( PersonDataObjectCollectionInterface $data_objects ): PersonCollectionInterface;
}