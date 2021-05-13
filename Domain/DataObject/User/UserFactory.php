<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class UserFactory implements UserFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;    
    }
    
    public function create( UserDataTransferObject $user_data_transfer_object ): UserInterface
    {
        return new User
        ( 
            $this->exception_factory, 
            $user_data_transfer_object->guid, 
            $user_data_transfer_object->history,
            $user_data_transfer_object->person, 
            $user_data_transfer_object->application 
        );
    }
    
    public function createCollection( UserInterface ...$Users ): UserCollectionInterface
    {
        return new UserCollection( $this->exception_factory, ...$Users );
    }    
    
    public function createDataTransferObject(): UserDataTransferObject
    {
        return new UserDataTransferObject;
    }
    
    public function createEmptyCollection(): UserCollectionInterface
    {
        return new UserCollection( $this->exception_factory, null );
    }      
    
    public function createDTO(): UserDataTransferObject
    {
        return new UserDataTransferObject;
    }    
}