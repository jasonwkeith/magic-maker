<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonRawTestDataFactoryInterface;

class PersonRawTestDataFactory implements PersonRawTestDataFactoryInterface
{
    public function __construct()
    {
        $this->data_transfer_objects = array();
    
        $this->data_transfer_objects[ 0 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 0 ]->guid ="d62ea34e-97a6-4dea-a5b4-0ce6095cef29";        
        $this->data_transfer_objects[ 0 ]->first_name = "John";
        $this->data_transfer_objects[ 0 ]->last_name = "Doe";
    
        $this->data_transfer_objects[ 1 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 1 ]->guid ="7685ba6a-fc76-482e-b964-258a454b003b";        
        $this->data_transfer_objects[ 1 ]->first_name = "Ledger";
        $this->data_transfer_objects[ 1 ]->middle_name = "James William";
        $this->data_transfer_objects[ 1 ]->last_name = "Keith";
        $this->data_transfer_objects[ 1 ]->suffix = "Junior";
     
        $this->data_transfer_objects[ 2 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 2 ]->guid ="26bca210-edc9-4395-a4e5-de97c1e19ce0";        
        $this->data_transfer_objects[ 2 ]->first_name = "Thomas";
        $this->data_transfer_objects[ 2 ]->middle_name = "Edward Patrick";
        $this->data_transfer_objects[ 2 ]->last_name = "Brady";
        $this->data_transfer_objects[ 2 ]->nickname = "The GOAT";     
        
        $this->data_transfer_objects[ 3 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 3 ]->guid ="fab2d907-ae7b-4195-82b0-a794236c87cd";        
        $this->data_transfer_objects[ 3 ]->first_name = "Isiah";
        $this->data_transfer_objects[ 3 ]->middle_name = "Lord";
        $this->data_transfer_objects[ 3 ]->last_name = "Thomas";
        $this->data_transfer_objects[ 3 ]->nickname = "Zeke";            
        
        $this->data_transfer_objects[ 4 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 4 ]->guid ="6ab7cd5c-9a69-4c6a-b031-5fb40ab98538";        
        $this->data_transfer_objects[ 4 ]->first_name = "Serena";
        $this->data_transfer_objects[ 4 ]->last_name = "Williams";
     
        $this->data_transfer_objects[ 5 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 5 ]->guid ="8b82171c-8380-4855-8842-c8876bdd2569";        
        $this->data_transfer_objects[ 5 ]->first_name = "Dave";
        $this->data_transfer_objects[ 5 ]->last_name = "Ramsey";
    
        $this->data_transfer_objects[ 6 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 6 ]->guid ="02dca342-9d4d-4082-bdf2-7cc9aec78b30";        
        $this->data_transfer_objects[ 6 ]->first_name = "David";
        $this->data_transfer_objects[ 6 ]->last_name = "Allen";
    
        $this->data_transfer_objects[ 7 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 7 ]->guid ="20197d41-42d3-449a-894b-48e68ba82786";        
        $this->data_transfer_objects[ 7 ]->first_name = "Scott";
        $this->data_transfer_objects[ 7 ]->last_name = "Alexander";
        
        $this->data_transfer_objects[ 8 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 8 ]->guid ="ddb29c63-040d-4ec4-95bd-ee1ccb703913";        
        $this->data_transfer_objects[ 8 ]->first_name = "Spencer";
        $this->data_transfer_objects[ 8 ]->last_name = "Johnson";     
        $this->data_transfer_objects[ 8 ]->has_md = true;          
        
        $this->data_transfer_objects[ 9 ] = new PersonDataTransferObject;
        $this->data_transfer_objects[ 9 ]->guid ="d9dc7c92-7266-43ac-97e5-9495d6cef8b1";        
        $this->data_transfer_objects[ 9 ]->first_name = "Kenneth";
        $this->data_transfer_objects[ 9 ]->last_name = "Blanchard";    
        $this->data_transfer_objects[ 9 ]->has_phd = true;            
    }
    
    public function create( int $number ): PersonDataTransferObject
    {
        return PersonDataTransferObject::duplicate( $this->data_transfer_objects[ $number ] );
    }
    
    public function createDefault(): PersonDataTransferObject
    {
       return new PersonDataTransferObject;
    }   
    
    public function createRawWithMiddleName(): PersonDataTransferObject
    {
       $dto = $this->create( 0 );
       $dto->middle_name = "Edwardo";
       return $dto;
    }
    
    public function createRawWithoutMiddleName(): PersonDataTransferObject
    {
       $dto = $this->create( 0 );
       $dto->middle_name = "";
       return $dto;
    } 
    
    public function createRawWithNickname(): PersonDataTransferObject
    {
       $dto = $this->create( 0 );
       $dto->nickname = "Edwardo";
       return $dto;
    }
    
    public function createRawWithoutNickname(): PersonDataTransferObject
    {
       $dto = $this->create( 0 );
       $dto->nickname = "";
       return $dto;
    } 
}