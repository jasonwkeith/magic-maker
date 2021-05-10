<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserRawTestDataFactoryInterface;

class UserTestDataFactory implements UserTestDataFactoryInterface
{
    public function __construct( UserFactoryInterface $user_factory, UserRawTestDataFactoryInterface $user_raw_test_data_factory )
    {
        $this->user_factory = $user_factory;
        $this->user_raw_test_data_factory = $user_raw_test_data_factory;
    }

    public function create( int $number ): UserInterface
    {
        return $this->user_factory->create( $this->user_raw_test_data_factory->create( $number ) );
    }
    
    public function createArray( int $number ): array
    {
        $raw_counter = $number;
        $users = array();
        
        for( $i = 0; $i < 4; $i++ )
        {
            if( $raw_counter > 9 )
            {
                $raw_counter = 0;
            }
            $users[ $i ] = $this->create( $raw_counter );
        }
        
        return $users;
    }      
    
    public function createDefault(): UserInterface
    {
        return $this->user_factory->create( $this->user_raw_test_data_factory->createDefault() );
    }
    
    public function createCollection( int $number ): UserCollectionInterface
    {
        return $this->user_factory->createCollection( ...$this->createArray( $number ) );
    }
    
    public function createRaw( int $number ): UserDataTransferObject
    {
        return $this->user_raw_test_data_factory->create( $number );
    }
    
    public function createRawDefault(): UserDataTransferObject
    {
        return $this->user_raw_test_data_factory->createDefault();
    }
    
    public function createRawWithApplicationName(): UserDataTransferObject
    {
        return $this->user_raw_test_data_factory->createRawWithApplicationName();
    }
    
    public function createRawWithoutApplicationName(): UserDataTransferObject
    {
        return $this->user_raw_test_data_factory->createRawWithoutApplicationName();
    }
        
    public function createRawWithMiddlename(): UserDataTransferObject
    {
        return $this->user_raw_test_data_factory->createRawWithMiddlename();
    }
        
    public function createRawWithoutMiddlename(): UserDataTransferObject 
    {
        return $this->user_raw_test_data_factory->createRawWithoutMiddlename();
    }
        
    public function createRawWithNickname(): UserDataTransferObject
    {
        return $this->user_raw_test_data_factory->createRawWithNickname();
    }
        
    public function createRawWithoutNickname(): UserDataTransferObject
    {
        return $this->user_raw_test_data_factory->createRawWithoutNickname();
    }
        
    public function createRawWithUser(): UserDataTransferObject
    {
        return $this->user_raw_test_data_factory->createRawWithUser();
    }
        
    public function createRawWithoutUser(): UserDataTransferObject  
    {
        return $this->user_raw_test_data_factory->createRawWithoutUser();
    }
}