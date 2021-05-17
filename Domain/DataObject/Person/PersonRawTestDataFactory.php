<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class PersonRawTestDataFactory implements PersonRawTestDataFactoryInterface
{
    public function __construct( HistoryTestDataFactoryInterface $history_test_data_factory )
    {
        $this->history_test_data_factory = $history_test_data_factory;        

        $this->guids[ 0 ] = "d62ea34e-97a6-4dea-a5b4-0ce6095cef29";
        $this->guids[ 1 ] = "7685ba6a-fc76-482e-b964-258a454b003b";  
        $this->guids[ 2 ] = "26bca210-edc9-4395-a4e5-de97c1e19ce0"; 
        $this->guids[ 3 ] = "fab2d907-ae7b-4195-82b0-a794236c87cd";   
        $this->guids[ 4 ] = "6ab7cd5c-9a69-4c6a-b031-5fb40ab98538";   
        $this->guids[ 5 ] = "8b82171c-8380-4855-8842-c8876bdd2569";  
        $this->guids[ 6 ] = "02dca342-9d4d-4082-bdf2-7cc9aec78b30";  
        $this->guids[ 7 ] = "20197d41-42d3-449a-894b-48e68ba82786";   
        $this->guids[ 8 ] = "ddb29c63-040d-4ec4-95bd-ee1ccb703913";    
        $this->guids[ 9 ] = "d9dc7c92-7266-43ac-97e5-9495d6cef8b1";  

        $this->first_names[ 0 ] = "John";
        $this->first_names[ 1 ] = "Ledger";  
        $this->first_names[ 2 ] = "Thomas"; 
        $this->first_names[ 3 ] = "Isiah";   
        $this->first_names[ 4 ] = "Serena";   
        $this->first_names[ 5 ] = "Dave";  
        $this->first_names[ 6 ] = "David";  
        $this->first_names[ 7 ] = "Scott";   
        $this->first_names[ 8 ] = "Spencer";    
        $this->first_names[ 9 ] = "Kenneth";  

        $this->last_names[ 0 ] = "Doe";
        $this->last_names[ 1 ] = "Keith";  
        $this->last_names[ 2 ] = "Brady"; 
        $this->last_names[ 3 ] = "Thomas";   
        $this->last_names[ 4 ] = "Williams";   
        $this->last_names[ 5 ] = "Ramsey";  
        $this->last_names[ 6 ] = "Allen";  
        $this->last_names[ 7 ] = "Alexander";   
        $this->last_names[ 8 ] = "Johnson";    
        $this->last_names[ 9 ] = "Blanchard";         
        
        $this->middle_names[ 1 ] = "James William";  
        $this->middle_names[ 2 ] = "Edward Patrick"; 
        $this->middle_names[ 3 ] = "Lord";   
   
        $this->nicknames[ 2 ] = "The GOAT"; 
        $this->nicknames[ 3 ] = "Zeke";   

        $this->suffixes[ 1 ] = "Junior";

        $this->has_mds[ 8 ] = true;          
        $this->has_phds[ 9 ] = true;   
    }
    
    public function create( int $number ): PersonDataTransferObject
    {
        $dto = new PersonDataTransferObject();
        
        $dto->guid =  $this->guids[ $number ];
        $dto->history = $this->history_test_data_factory->create( $number );
        $dto->first_name = $this->first_names[ $number ];
        $dto->last_name = $this->last_names[ $number ]; 

        if( isset( $this->middle_names[ $number ] ) )
        {
            $dto->middle_name = $this->middle_names[ $number ];
        }
        
        if( isset( $this->nicknames[ $number ] ) )
        {
            $dto->nickname = $this->nicknames[ $number ];
        }       
        
        if( isset( $this->suffixes[ $number ] ) )
        {
            $dto->suffix = $this->suffixes[ $number ];
        }         
        
        if( isset( $this->has_mds[ $number ] ) )
        {
            $dto->has_md = $this->has_mds[ $number ];
        }

        if( isset( $this->has_phds[ $number ] ) )
        {
            $dto->has_phds = $this->has_phds[ $number ];
        }

        return $dto;
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