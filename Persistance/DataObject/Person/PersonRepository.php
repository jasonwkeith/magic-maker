<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;

class PersonRepository implements PersonRepositoryInterface
{
    public function __construct( PersonPersisterInterface $persister, PersonMapperInterface $mapper )
    {
        $this->persister = $persister;
        $this->mapper = $mapper;
    } 
    
    public function add( PersonInterface $person ): void
    {
        $data_object = $this->mapper->createDataObject( $person );
        $this->persister->write( $data_object );
    }

    public function get( string $guid ): PersonInterface
    {
        $data_object = $this->persister->read( $guid );
        return $this->mapper->createEntity( $data_object );
    }  
    
    public function getCollection( array $guids ): PersonCollectionInterface
    {
        $data_objects = $this->persister->readCollection( $guids );        
        return $this->mapper->createEntityCollection( $data_objects );
    }

    public function remove( string $guid ): void
    {
        $this->persister->remove( $guid );
    }      
}