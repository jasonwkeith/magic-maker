<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\RawApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;

class ApplicationTestDataFactory implements ApplicationTestDataFactoryInterface, RawApplicationTestDataFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $application_factory )
    {
        $this->application_factory = $application_factory;
    }

    private function create( array $data ): ApplicationInterface
    {
        return $this->application_factory->create( $data[ ApplicationInterface::GUID ], $data[ ApplicationInterface::NAME ] );
    }
    
    public function create0(): ApplicationInterface
    {
        return $this->create( $this->createRaw0() );
    }
    
    public function create1(): ApplicationInterface
    {
        return $this->create( $this->createRaw1() );
    }
    
    public function create2(): ApplicationInterface
    {
        return $this->create( $this->createRaw2() );
    }

    public function create3(): ApplicationInterface
    {
        return $this->create( $this->createRaw3() );
    }  
    
    public function create4(): ApplicationInterface
    {
        return $this->create( $this->createRaw4() );
    }  
    
    public function create5(): ApplicationInterface
    {
        return $this->create( $this->createRaw5() );
    }    

    public function create6(): ApplicationInterface
    {
        return $this->create( $this->createRaw6() );
    }   
    
    public function create7(): ApplicationInterface
    {
        return $this->create( $this->createRaw7() );
    } 
    
    public function create8(): ApplicationInterface
    {
        return $this->create( $this->createRaw8() );
    }   
    
    public function create9(): ApplicationInterface
    {
        return $this->create( $this->createRaw9() );
    }  
    
    public function createDefault(): ApplicationInterface
    {
        return $this->create( $this->createRawDefault() );
    }

    public function createArray0(): Array
    {
        $Applications[ 0 ] = $this->create( $this->createRaw0() );
        $Applications[ 1 ] = $this->create( $this->createRaw1() );
        $Applications[ 2 ] = $this->create( $this->createRaw2() );    
        $Applications[ 3 ] = $this->create( $this->createRaw3() );    
        
        return $Applications;
    }      
    
    public function createCollection0(): ApplicationCollectionInterface
    {
        return $this->createCollection( $this->createArray() );
    }

   public function createRaw0(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="4f92ed09-80f7-498f-842f-9a40b11f3791";
        $dto[ ApplicationInterface::NAME ] = "JasonWKeith.com";
        return $dto;
    }
    
    public function createRaw1(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="958077c8-1406-4999-b1c3-d4f11ddf615b";        
        $dto[ ApplicationInterface::NAME ] = "Otto";
        return $dto;
    }
    
    public function createRaw2(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="f33c74c0-4454-4e79-93a2-5ec104210eae";        
        $dto[ ApplicationInterface::NAME ] = "HAL";
        return $dto;
    }

    public function createRaw3(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="dcb68857-4786-4084-a82b-b15ef7798a4c";        
        $dto[ ApplicationInterface::NAME ] = "Google.com";
        return $dto;
    }  
    
    public function createRaw4(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="0b05aab9-6e76-4687-9871-6cc381beb9b7";            
        $dto[ ApplicationInterface::NAME ] = "Healthmate";
        return $dto;
    }  
    
    public function createRaw5(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="bad9e498-c7c2-444d-aa78-ecbead3bac2e";        
        $dto[ ApplicationInterface::NAME ] = "Runkeeper";
        return $dto;
    }    

    public function createRaw6(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="4a2e0108-382f-408f-a360-62d2c2dc2dae";        
        $dto[ ApplicationInterface::NAME ] = "Facebook";
        return $dto;
    }   
    
    public function createRaw7(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="246eb42f-997b-4fd2-ac87-c6d53e3943c2";        
        $dto[ ApplicationInterface::NAME ] = "Twitter";
        return $dto;
    } 
    
    public function createRaw8(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="d32c0d2f-d514-41a3-ab67-2f9f19a64490";               
        $dto[ ApplicationInterface::NAME ] = "Yahoo Fantasy Sports";
        return $dto;
    }   
    
    public function createRaw9(): array
    {
        $dto = $this->application_factory->createDTO();
        $dto[ ApplicationInterface::GUID ] ="e8aaf393-4367-4e6c-9734-820853ba7ebe";        
        $dto[ ApplicationInterface::NAME ] = "StaleyNation";
        return $dto;
    }  
    
    public function createRawDefault(): array
    {
        $dto = $this->application_factory->createDTO();        
        return $dto;
    }      
}