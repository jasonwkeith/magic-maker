<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserRawTestDataFactoryInterface;

class UserRawTestDataFactory implements UserRawTestDataFactoryInterface
{
    public function __construct( UserFactoryInterface $user_factory, ApplicationTestDataFactoryInterface $application_test_data_factory, PersonTestDataFactoryInterface $person_test_data_factory )
    {
        $this->user_factory = $user_factory;
        $this->application_test_data_factory = $application_test_data_factory;
        $this->person_test_data_factory = $person_test_data_factory;
        
        $this->application_guids = array();
        $this->application_guids[ 0 ] = "67a3fb8c-10b6-47d7-8e6f-6b55a545d46f";
        $this->application_guids[ 1 ] = "7801f6c7-2f27-4fb2-9c89-793a9f432fab";   
        $this->application_guids[ 2 ] = "62d3dcc0-127e-4a35-b82c-9d4af515f806";   
        $this->application_guids[ 3 ] = "8f6a357f-461d-4b95-a346-71d83847d871";           
        $this->application_guids[ 4 ] = "8da420c8-4f9e-42d5-a873-55ba2606dbe2";            
        $this->application_guids[ 5 ] = "8fad2281-8ac4-4a08-a72c-c0f710aa61ef";             
        $this->application_guids[ 6 ] = "e848f8c6-c3ad-4f75-b00b-be8701b5c624";           
        $this->application_guids[ 7 ] = "66dbd9dc-3ea8-4be9-9482-dd838ce5e315";          
        $this->application_guids[ 8 ] = "95137aa9-34c1-459b-b515-621eb8373c35";          
        $this->application_guids[ 9 ] = "e8b22881-fa05-44a2-9e1b-3856b4c8067c";          
    }

   public function create( int $number ): UserDataTransferObject
   {
       $dto = $this->user_factory->createDTO();
       $dto->guid = $this->application_guids[ $number ];
       $dto->application = $this->application_test_data_factory->create( $number );
       $dto->person = $this->person_test_data_factory->create( $number );
       
       return $dto;
   }
   
   public function createDefault(): UserDataTransferObject
   {
       return new UserDataTransferObject;
   }   
   
    public function createRawWithApplicationName(): UserDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->application = $this->application_test_data_factory->create( 0 );
        return $dto;
    }
    
    public function createRawWithoutApplicationName(): UserDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->application = null;
        return $dto;
    }
        
    public function createRawWithMiddlename(): UserDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->person = $this->person_test_data_factory->createWithMiddleName( 0 );
        return $dto;
    }
        
    public function createRawWithoutMiddlename(): UserDataTransferObject 
    {
        $dto = $this->create( 0 );
        $dto->person = $this->person_test_data_factory->createWithoutMiddleName( 0 );
        return $dto;
    }
        
    public function createRawWithNickname(): UserDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->person = $this->person_test_data_factory->createWithNickname( 0 );
        return $dto;
    }
        
    public function createRawWithoutNickname(): UserDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->person = $this->person_test_data_factory->createWithoutNickname( 0 );
        return $dto;
    }
        
    public function createRawWithUser(): UserDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->person = $this->person_test_data_factory->createRaw( 0 );
        return $dto;
    }
        
    public function createRawWithoutUser(): UserDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->person = null;
        return $dto;
    }
        
}