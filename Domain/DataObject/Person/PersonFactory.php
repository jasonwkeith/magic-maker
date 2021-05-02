<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class PersonFactory implements PersonFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;    
    }
    
    public function create( string $guid, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd ): PersonInterface
    {
        return new Person( $this->exception_factory, $guid, $first_name, $middle_name, $last_name,  $nickname, $suffix, $has_md, $has_phd  );
    }
    
    public function createCollection( PersonInterface ...$persons ): PersonCollectionInterface
    {
        return new PersonCollection( $this->exception_factory, ...$persons );
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