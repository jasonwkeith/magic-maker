<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class PersonFactory implements PersonFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;    
    }
    
    public function create( PersonDataTransferObject $person ): PersonInterface
    {
        return new Person( $this->exception_factory, $person->guid, $person->history, $person->first_name, $person->middle_name, $person->last_name, $person->nickname, $person->suffix,$person->has_md, $person->has_phd );
    }
    
    public function createCollection( PersonInterface ...$persons ): PersonCollectionInterface
    {
        return new PersonCollection( $this->exception_factory, ...$persons );
    }    
    
    public function createDataTransferObject(): PersonDataTransferObject
    {
        return new PersonDataTransferObject();
    }
    
    public function createEmptyCollection(): PersonCollectionInterface
    {
        return new PersonCollection( $this->exception_factory, null );
    }      
    
    public function createDTO(): array
    {
        $dto = array();
        $dto[ PersonInterface::GUID ] ="";
        $dto[ PersonInterface::FIRST_NAME ] ="";
        $dto[ PersonInterface::LAST_NAME ] ="";
        $dto[ PersonInterface::MIDDLE_NAME ] = "";
        $dto[ PersonInterface::NICKNAME ] ="";
        $dto[ PersonInterface::SUFFIX ] = "";
        $dto[ PersonInterface::HAS_MD ] = false;
        $dto[ PersonInterface::HAS_PHD ] = false;

        return $dto;
    }    
}