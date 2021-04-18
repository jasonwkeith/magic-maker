<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonDTOFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\RawPersonTestDataFactoryInterface;

class PersonTestDataFactory implements PersonTestDataFactoryInterface, RawPersonTestDataFactoryInterface
{
    public function __construct( PersonFactoryInterface $person_factory )
    {
        $this->person_factory = $person_factory;
    }
    
    public function create0(): PersonInterface
    {
        return $this->create( $this->createRaw0() );
    }
    
    public function create1(): PersonInterface
    {
          return $this->create( $this->createRaw1() );
    }
    
    public function create2(): PersonInterface
    {
        return $this->create( $this->createRaw2() );
    }
    
    public function create3(): PersonInterface
    {
        return $this->create( $this->createRaw3() );
    }  
    
    public function create4(): PersonInterface
    {
        return $this->create( $this->createRaw4() );
    }  
    
    public function create5(): PersonInterface
    {
        return $this->create( $this->createRaw5() );
    }    

    public function create6(): PersonInterface
    {
        return $this->create( $this->createRaw6() );
    }   
    
    public function create7(): PersonInterface
    {
        return $this->create( $this->createRaw7() );
    } 
    
    public function create8(): PersonInterface
    {
        return $this->create( $this->createRaw8() );
    }   
    
    public function create9(): PersonInterface
    {
        return $this->create( $this->createRaw9() );
    }  
    
    public function createDefault(): PersonInterface
    {
        return $this->create( $this->createRaw0() );
    }

    public function createArray0(): Array
    {
        $persons[ 0 ] = $this->create( $this->createRaw0() );
        $persons[ 1 ] = $this->create( $this->createRaw1() );
        $persons[ 2 ] = $this->create( $this->createRaw2() ); 
        $persons[ 3 ] = $this->create( $this->createRaw3() ); 
        
        return $persons;
    }      
    
    public function createArray1(): Array
    {
        $persons[ 0 ] = $this->create( $this->createRaw1() );
        $persons[ 1 ] = $this->create( $this->createRaw2() );
        $persons[ 2 ] = $this->create( $this->createRaw3() ); 
        $persons[ 3 ] = $this->create( $this->createRaw4() ); 
        
        return $persons;
    }    
    
    public function createArray2(): Array
    {
        $persons[ 0 ] = $this->create( $this->createRaw2() );
        $persons[ 1 ] = $this->create( $this->createRaw3() );
        $persons[ 2 ] = $this->create( $this->createRaw4() ); 
        //$persons[ 3 ] = $this->create( $this->createRaw5() ); 
        
        return $persons;
    }     
    
    public function createCollection0(): PersonCollectionInterface
    {
        return $this->person_factory->createCollection( ...$this->createArray0() );
    }
    
    public function createCollection1(): PersonCollectionInterface
    {
        return $this->person_factory->createCollection( ...$this->createArray1() );
    }    
    
    public function createCollection2(): PersonCollectionInterface
    {
        return $this->person_factory->createCollection( ...$this->createArray2() );
    }   
    
    public function createCollectionDefault(): PersonCollectionInterface
    {
        $people = array();
        array_push( $people, $this->createDefault() );
        return $this->person_factory->createCollection( ...$this->createArray2() );
    }   
    
    private function create( array $data ): PersonInterface
    {
        return $this->person_factory->create( $data[ PersonInterface::GUID ], $data[ PersonInterface::FIRST_NAME ], $data[ PersonInterface::MIDDLE_NAME ], $data[ PersonInterface::LAST_NAME ],  $data[ PersonInterface::NICKNAME ], $data[ PersonInterface::SUFFIX ], $data[ PersonInterface::HAS_MD ], $data[ PersonInterface::HAS_PHD ] );
    }
    
    public function createRaw0(): array
    {
        $dto = $this->person_factory->createDTO();
        
        $dto[ PersonInterface::GUID ] ="d62ea34e-97a6-4dea-a5b4-0ce6095cef29";
        $dto[ PersonInterface::FIRST_NAME ] = "John";
        $dto[ PersonInterface::LAST_NAME ] = "Doe";
        return $dto;
    }
    
    public function createRaw1(): array
    {
        $dto = $this->person_factory->createDTO();   
        $dto[ PersonInterface::GUID ] ="7685ba6a-fc76-482e-b964-258a454b003b";        
        $dto[ PersonInterface::FIRST_NAME ] = "Ledger";
        $dto[ PersonInterface::MIDDLE_NAME ] = "James William";
        $dto[ PersonInterface::LAST_NAME ] = "Keith";
        $dto[ PersonInterface::SUFFIX ] = "Junior";
        
        return $dto;
    }
    
    public function createRaw2(): array
    {
        $dto = $this->person_factory->createDTO();     
        $dto[ PersonInterface::GUID ] ="26bca210-edc9-4395-a4e5-de97c1e19ce0";        
        $dto[ PersonInterface::FIRST_NAME ] = "Thomas";
        $dto[ PersonInterface::MIDDLE_NAME ] = "Edward Patrick";
        $dto[ PersonInterface::LAST_NAME ] = "Brady";
        $dto[ PersonInterface::NICKNAME ] = "The Goat";
        return $dto;
    }

    public function createRaw3(): array
    {
        $dto = $this->person_factory->createDTO(); 
        $dto[ PersonInterface::GUID ] ="fab2d907-ae7b-4195-82b0-a794236c87cd";        
        $dto[ PersonInterface::FIRST_NAME ] = "Isiah";
        $dto[ PersonInterface::MIDDLE_NAME ] = "Lord";
        $dto[ PersonInterface::LAST_NAME ] = "Thomas";

        return $dto;
    }  
    
    public function createRaw4(): array
    {
        $dto = $this->person_factory->createDTO(); 
        $dto[ PersonInterface::GUID ] ="6ab7cd5c-9a69-4c6a-b031-5fb40ab98538";        
        $dto[ PersonInterface::FIRST_NAME ] = "Serena";
        $dto[ PersonInterface::LAST_NAME ] = "Williams";

        return $dto;
    }  
    
    public function createRaw5(): array
    {
        $dto = $this->person_factory->createDTO();  
        $dto[ PersonInterface::GUID ] ="8b82171c-8380-4855-8842-c8876bdd2569";        
        $dto[ PersonInterface::FIRST_NAME ] = "Dave";
        $dto[ PersonInterface::LAST_NAME ] = "Ramsey";

        return $dto;
    }    

    public function createRaw6(): array
    {
        $dto = $this->person_factory->createDTO();  
        $dto[ PersonInterface::GUID ] ="02dca342-9d4d-4082-bdf2-7cc9aec78b30";        
        $dto[ PersonInterface::FIRST_NAME ] = "David";
        $dto[ PersonInterface::LAST_NAME ] = "Allen";

        return $dto;
    }   
    
    public function createRaw7(): array
    {
        $dto = $this->person_factory->createDTO();  
        $dto[ PersonInterface::GUID ] ="20197d41-42d3-449a-894b-48e68ba82786";        
        $dto[ PersonInterface::FIRST_NAME ] = "Scott";
        $dto[ PersonInterface::LAST_NAME ] = "Alexander";

        return $dto;
    } 
    
    public function createRaw8(): array
    {
        $dto = $this->person_factory->createDTO();     
        $dto[ PersonInterface::GUID ] ="ddb29c63-040d-4ec4-95bd-ee1ccb703913";        
        $dto[ PersonInterface::FIRST_NAME ] = "Spencer";
        $dto[ PersonInterface::LAST_NAME ] = "Johnson";

        return $dto;
    }   
    
    public function createRaw9(): array
    {
        $dto = $this->person_factory->createDTO();   
        $dto[ PersonInterface::GUID ] ="d9dc7c92-7266-43ac-97e5-9495d6cef8b1";        
        $dto[ PersonInterface::FIRST_NAME ] = "Kenneth";
        $dto[ PersonInterface::LAST_NAME ] = "Blanchard";
        $dto[ PersonInterface::HAS_PHD ]= true;

        return $dto;
    }  
    
    public function createRawDefault(): array
    {
        return $this->person_factory->createDTO();
    }      
    
    public function createRawJunior(): array
    {
        $dto = $this->createRaw0();
        $dto[ PersonInterface::SUFFIX ] = true;
        
        return $dto;
    }      
  
    public function createRawMD(): array
    {
     
        $dto = $this->createRaw0();
        $dto[ PersonInterface::HAS_MD ]= true;
        
        return $dto;
    }   

    public function createRawMiddlename(): array
    {
        
        $dto = $this->createRaw0();
        $dto[ PersonInterface::NICKNAME ] = "William";
        
        return $dto;
    }        

    public function createRawNickname(): array
    {
        $dto = $this->createRaw0();
        $dto[ PersonInterface::NICKNAME ] = "The Honey Badger";
        
        return $dto;
    }      
    
    public function createRawPHD(): array
    {
        $dto = $this->createRaw0();
        $dto[ PersonInterface::HAS_PHD ]= true;
        
        return $dto;
    }     
}