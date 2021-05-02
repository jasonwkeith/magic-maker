<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserDTOFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\RawUserTestDataFactoryInterface;

class UserTestDataFactory implements UserTestDataFactoryInterface, RawUserTestDataFactoryInterface
{
    public function __construct( UserFactoryInterface $User_factory, ApplicationTestDataFactoryInterface $application_test_data_factory, PersonTestDataFactoryInterface $person_test_data_factory )
    {
        $this->user_factory = $User_factory;
        $this->application_test_data_factory = $application_test_data_factory;        
        $this->person_test_data_factory = $person_test_data_factory;
    }
    
    public function create0(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw0()[ UserInterface::GUID ], $this->person_test_data_factory->create0(), $this->application_test_data_factory->create0() );
    }
    
    public function create1(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw1()[ UserInterface::GUID ], $this->person_test_data_factory->create1(), $this->application_test_data_factory->create1() );
    }
    
    public function create2(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw2()[ UserInterface::GUID ], $this->person_test_data_factory->create2(), $this->application_test_data_factory->create2() );
    }
    
    public function create3(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw3()[ UserInterface::GUID ], $this->person_test_data_factory->create3(), $this->application_test_data_factory->create3() );
    }  
    
    public function create4(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw4()[ UserInterface::GUID ], $this->person_test_data_factory->create4(), $this->application_test_data_factory->create4() );
    }  
    
    public function create5(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw5()[ UserInterface::GUID ], $this->person_test_data_factory->create5(), $this->application_test_data_factory->create5() );
    }    

    public function create6(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw6()[ UserInterface::GUID ], $this->person_test_data_factory->create6(), $this->application_test_data_factory->create6() );
    }   
    
    public function create7(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw7()[ UserInterface::GUID ], $this->person_test_data_factory->create7(), $this->application_test_data_factory->create7() );
    } 
    
    public function create8(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw8()[ UserInterface::GUID ], $this->person_test_data_factory->create8(), $this->application_test_data_factory->create8() );
    }   
    
    public function create9(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw9()[ UserInterface::GUID ], $this->person_test_data_factory->create9(), $this->application_test_data_factory->create9() );
    }  
    
    public function createDefault(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw0()[ UserInterface::GUID ], $this->person_test_data_factory->create0(), $this->application_test_data_factory->create0() );
    }
    
    public function createWithApplicationName(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw0()[ UserInterface::GUID ], $this->person_test_data_factory->create0(), $this->application_test_data_factory->create0() );
    }      
    
    public function createWithoutApplicationName(): UserInterface
    {
        return $this->user_factory->create( $this->createRaw0()[ UserInterface::GUID ], $this->person_test_data_factory->create0(), null );
    }       

    public function createArray0(): Array
    {
        $Users[ 0 ] = $this->create( $this->createRaw0() );
        $Users[ 1 ] = $this->create( $this->createRaw1() );
        $Users[ 2 ] = $this->create( $this->createRaw2() ); 
        $Users[ 3 ] = $this->create( $this->createRaw3() ); 
        
        return $Users;
    }      
    
    public function createArray1(): Array
    {
        $Users[ 0 ] = $this->create( $this->createRaw1() );
        $Users[ 1 ] = $this->create( $this->createRaw2() );
        $Users[ 2 ] = $this->create( $this->createRaw3() ); 
        $Users[ 3 ] = $this->create( $this->createRaw4() ); 
        
        return $Users;
    }    
    
    public function createArray2(): Array
    {
        $Users[ 0 ] = $this->create( $this->createRaw2() );
        $Users[ 1 ] = $this->create( $this->createRaw3() );
        $Users[ 2 ] = $this->create( $this->createRaw4() ); 
        $Users[ 3 ] = $this->create( $this->createRaw5() ); 
        
        return $Users;
    }     
    
    public function createCollection0(): UserCollectionInterface
    {
        return $this->user_factory->createCollection( ...$this->createArray0() );
    }
    
    public function createCollection1(): UserCollectionInterface
    {
        return $this->user_factory->createCollection( ...$this->createArray1() );
    }    
    
    public function createCollection2(): UserCollectionInterface
    {
        return $this->user_factory->createCollection( ...$this->createArray2() );
    }   
    
    public function createCollectionDefault(): UserCollectionInterface
    {
        $people = array();
        array_push( $people, $this->createDefault() );
        return $this->user_factory->createCollection( ...$this->createArray2() );
    }   

    public function createRaw0(): array
    {  
        $user_guid ="bb7ee08a-da1e-4c7d-bab4-5b5fcc167b41";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create0(), $this->application_test_data_factory->create0() );
    }
    
    public function createRaw1(): array
    {
        $user_guid ="da01038b-80a2-4360-be9f-8d444fe451e6";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create1(), $this->application_test_data_factory->create1() );
    }
    
    public function createRaw2(): array
    {
        $user_guid ="815e1f9f-1eb0-4e3a-bb41-fb2de93b4158";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create2(), $this->application_test_data_factory->create2() );
    }

    public function createRaw3(): array
    {
        $user_guid ="3eb39253-1c58-4fec-abfc-af9654dea5bd";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create3(), $this->application_test_data_factory->create3() );
    }  
    
    public function createRaw4(): array
    {
        $user_guid ="3e9c09e4-1213-4570-9642-49401cbe5a7f";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create4(), $this->application_test_data_factory->create4() );
    }  
    
    public function createRaw5(): array
    {
        $user_guid ="5a045dfc-1aca-40c4-b4a6-ae15f55376fc";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create5(), $this->application_test_data_factory->create5() );
    }    

    public function createRaw6(): array
    {
        $user_guid ="1d27ffb9-08ca-467b-9759-4a370e698cc6";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create6(), $this->application_test_data_factory->create6() );
    }   
    
    public function createRaw7(): array
    {
        $user_guid ="18a0dceb-f40c-4109-b3c5-d4817812b8a2";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create7(), $this->application_test_data_factory->create7() );
    } 
    
    public function createRaw8(): array
    {
        $user_guid ="8bc6a63d-b78f-478b-ba60-9866ec222e88";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create8(), $this->application_test_data_factory->create8() );
    }   
    
    public function createRaw9(): array
    {
        $user_guid ="d6f26857-1d0f-49b9-9c0e-4449e21d34b7";
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create9(), $this->application_test_data_factory->create9() );
    }  
    
    public function createRawDefault(): array
    {
        $user_guid ="ce1bfa43-fb66-4940-aef6-2b65db8d9e97";        
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->createDefault(), $this->application_test_data_factory->createDefault() );
    }      
    
    public function createRawWithApplication(): array
    {
        $user_guid ="7801f6c7-2f27-4fb2-9c89-793a9f432fab";   
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->createDefault(), $this->application_test_data_factory->create0() );
    } 
    
    public function createRawWithoutApplication(): array
    {
        $user_guid ="62d3dcc0-127e-4a35-b82c-9d4af515f806";   
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->createDefault(), null );
    }      

    public function createRawWithMiddlename(): array
    {
        $user_guid ="8f6a357f-461d-4b95-a346-71d83847d871";           
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->createWithMiddleName(), $this->application_test_data_factory->create0() );
    }       
    
    public function createRawWithoutMiddlename(): array
    {
        $user_guid ="8da420c8-4f9e-42d5-a873-55ba2606dbe2";            
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->createWithoutMiddleName(), $this->application_test_data_factory->create0() );
    }      

    public function createRawWithNickname(): array
    {
        $user_guid ="8fad2281-8ac4-4a08-a72c-c0f710aa61ef";             
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->createWithNickName(), $this->application_test_data_factory->create0() );
    }   
    
    public function createRawWithoutNickname(): array
    {
        $user_guid ="e848f8c6-c3ad-4f75-b00b-be8701b5c624";           
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->createWithoutNickName(), $this->application_test_data_factory->create0() );
    }    
    
    public function createRawWithApplicationName(): array
    {
        $user_guid ="e848f8c6-c3ad-4f75-b00b-be8701b5c624";          
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create0(), $this->application_test_data_factory->create0() );
    }     
    
    public function createRawWithoutApplicationName(): array
    {
        $user_guid ="95137aa9-34c1-459b-b515-621eb8373c35";          
        return $this->createUserDTO( $user_guid, $this->person_test_data_factory->create0(), null );
    }       
    
    private function create( array $data )
    {
        $user_guid ="49f0cf8a-bc9d-4b50-8666-6c5585cf7ccb";                 
        return $this->user_factory->create( $data[ UserInterface::GUID ], $data[ UserInterface::PERSON ], $data[ UserInterface::APPLICATION ] );
    }
    
    private function createUserDTO( string $user_guid, ?PersonInterface $person, ?ApplicationInterface $application ): array
    {
        $dto[ UserInterface::GUID ] = $user_guid;
        $dto[ UserInterface::PERSON ] = $person;
        $dto[ UserInterface::APPLICATION ] = $application;
        return $dto;
    }
}