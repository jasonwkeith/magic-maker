<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;

class PersonMapper implements PersonMapperInterface
{
    public function __construct( PersonFactoryInterface $person_factory, PersonDataObjectFactoryInterface $person_data_object_factory )
    {
        $this->person_factory = $person_factory;
        $this->person_data_object_factory = $person_data_object_factory;
    }

    public function createDataObject( PersonInterface $person ): PersonDataObjectInterface
    {
        return $this->person_data_object_factory->create( $person->getGUID(), $person->getFirstName(), $person->getMiddleName(), $person->getLastName(), $person->getNickname(), $person->getSuffix(), $person->hasMD(), $person->hasPHD() );
    }
    
    public function createEntity( PersonDataObjectInterface $data_object ): PersonInterface
    {
        return $this->person_factory->create( $data_object->getGUID(), $data_object->getFirstName(), $data_object->getMiddleName(), $data_object->getLastName(), $data_object->getNickname(), $data_object->getSuffix(), $data_object->hasMD(), $data_object->hasPHD() );
    }
    
    public function createEntityCollection( PersonDataObjectCollectionInterface $data_objects ): PersonCollectionInterface
    {
        $persons = array();
        foreach( $data_objects as $data_object )
        {
            array_push( $persons, $this->person_factory->create( $data_object->getGUID(), $data_object->getFirstName(), $data_object->getMiddleName(), $data_object->getLastName(), $data_object->getNickname(), $data_object->getSuffix(), $data_object->hasMD(), $data_object->hasPHD() ) );
        }
        
        return $this->person_factory->createCollection( ...$persons );
    }    
}