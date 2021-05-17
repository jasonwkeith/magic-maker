<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class ApplicationRawTestDataFactory implements ApplicationRawTestDataFactoryInterface
{
    public function __construct( HistoryTestDataFactoryInterface $history_test_data_factory )
    {
        $this->history_test_data_factory = $history_test_data_factory;
        
        $this->guids[ 0 ] = "4f92ed09-80f7-498f-842f-9a40b11f3791";
        $this->guids[ 1 ] = "958077c8-1406-4999-b1c3-d4f11ddf615b"; 
        $this->guids[ 2 ] = "f33c74c0-4454-4e79-93a2-5ec104210eae";   
        $this->guids[ 3 ] = "dcb68857-4786-4084-a82b-b15ef7798a4c";   
        $this->guids[ 4 ] = "0b05aab9-6e76-4687-9871-6cc381beb9b7";  
        $this->guids[ 5 ] = "bad9e498-c7c2-444d-aa78-ecbead3bac2e";        
        $this->guids[ 6 ] = "4a2e0108-382f-408f-a360-62d2c2dc2dae";        
        $this->guids[ 7 ] = "246eb42f-997b-4fd2-ac87-c6d53e3943c2";       
        $this->guids[ 8 ] = "d32c0d2f-d514-41a3-ab67-2f9f19a64490";      
        $this->guids[ 9 ] = "e8aaf393-4367-4e6c-9734-820853ba7ebe";        

        $this->names[ 0 ] = "JasonWKeith.com";
        $this->names[ 1 ] = "Otto";
        $this->names[ 2 ] = "HAL";
        $this->names[ 3 ] = "Google.com";
        $this->names[ 4 ] = "Healthmate";
        $this->names[ 5 ] = "Runkeeper";
        $this->names[ 6 ] = "Facebook";
        $this->names[ 7 ] = "Twitter";        
        $this->names[ 8 ] = "Yahoo Fantasy Sports";
        $this->names[ 9 ] = "StaleyNation";        
    }

    public function create( int $number ): ApplicationDataTransferObject
    {
        $data_transfer_object =  new ApplicationDataTransferObject;
        $data_transfer_object->guid = $this->guids[ $number ];
        $data_transfer_object->name = $this->names[ $number ];        
        $data_transfer_object->history = $this->history_test_data_factory->create( $number );
        
        return $data_transfer_object;
    }
    
    public function createDefault(): ApplicationDataTransferObject
    {
        $dto =  new ApplicationDataTransferObject;        
        $dto->history = $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create( 0 );
        
        return $dto;
    }      
}