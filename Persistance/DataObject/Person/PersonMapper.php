<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

class PersonMapper implements PersonMapperInterface
{
    public function __construct( PersonFactoryInterface $person_factory, PersonDataObjectFactoryInterface $person_data_object_factory, HistoryMapperInterface $history_mapper )
    {
        $this->person_factory = $person_factory;
        $this->person_data_object_factory = $person_data_object_factory;
        $this->history_mapper = $history_mapper;
    }

    public function createDataObject( PersonInterface $person ): PersonDataObjectInterface
    {
        $history = $this->history_mapper->createDataObject( $person->getCreatedBy(), $person->getCreatedDate(), $person->getUpdatedBy(), $person->getUpdatedDate() );
        return $this->person_data_object_factory->create( $person->getGUID(), $history, $person->getFirstName(), $person->getMiddleName(), $person->getLastName(), $person->getNickname(), $person->getSuffix(), $person->hasMD(), $person->hasPHD() );
    }
    
    public function createEntity( PersonDataObjectInterface $data_object ): PersonInterface
    {
        $data_transfer_object = $this->person_factory->createDataTransferObject();
        $data_transfer_object->guid = $data_object->getGUID();
        $data_transfer_object->history = $this->history_mapper->createEntity( $data_object->getHistory() );
        $data_transfer_object->first_name = $data_object->getFirstName();
        $data_transfer_object->middle_name = $data_object->getMiddleName();
        $data_transfer_object->last_name = $data_object->getLastName();
        $data_transfer_object->nickname = $data_object->getNickname();
        $data_transfer_object->suffix = $data_object->getSuffix();
        $data_transfer_object->has_md = $data_object->hasMD();        
        $data_transfer_object->has_phd = $data_object->hasPHD();   
        
        return $this->person_factory->create( $data_transfer_object );
    }
    
    public function createEntityCollection( PersonDataObjectCollectionInterface $data_objects ): PersonCollectionInterface
    {
        $persons = array();
        foreach( $data_objects as $data_object )
        {
            array_push( $persons, $this->createEntity( $data_object ) );
        }
        
        return $this->person_factory->createCollection( ...$persons );
    }    
}