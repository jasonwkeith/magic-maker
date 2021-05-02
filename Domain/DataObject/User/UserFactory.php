<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class UserFactory implements UserFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;    
    }
    
    public function create( string $guid, ?PersonInterface $person, ?ApplicationInterface $application ): UserInterface
    {
        return new User( $this->exception_factory, $guid, $person, $application );
    }
    
    public function createCollection( UserInterface ...$Users ): UserCollectionInterface
    {
        return new UserCollection( $this->exception_factory, ...$Users );
    }    
    
    public function createEmptyCollection(): UserCollectionInterface
    {
        return new UserCollection( $this->exception_factory, null );
    }      
    
    public function createDTO(): array
    {
        $dto = array();
        $dto[ UserInterface::GUID ] ="";
        $dto[ UserInterface::PERSON ] ="";
        $dto[ UserInterface::APPLICATION ] ="";
        return $dto;
    }    
}