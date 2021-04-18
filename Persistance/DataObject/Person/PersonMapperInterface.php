<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;

interface PersonMapperInterface
{
    public function __construct( PersonFactoryInterface $person_factory, PersonDataObjectFactoryInterface $person_data_object_factory );
    public function createDataObject( PersonInterface $person ): PersonDataObjectInterface;
    public function createEntity( PersonDataObjectInterface $data_object ): PersonInterface;
}