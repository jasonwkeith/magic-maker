<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;

class PersonRepositoryFactory implements PersonRepositoryFactoryInterface
{
    public function __construct( PersonPersisterInterface $persister, PersonMapperInterface $mapper )
    {
        $this->persister = $persister;
        $this->mapper = $mapper;      
    }
    
    public function create(): PersonRepositoryInterface
    {
        return new PersonRepository(  $this->persister, $this->mapper );
    }
}