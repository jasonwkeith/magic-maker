<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class ApplicationRawTestDataFactory implements ApplicationRawTestDataFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $application_factory, HistoryTestDataFactoryInterface $history_test_data_factory )
    {
        $this->application_factory = $application_factory;
        $this->history_test_data_factory = $history_test_data_factory;
        
        $this->data_transfer_objects = array();

        $this->data_transfer_objects[ 0 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create( 0 );
        $this->data_transfer_objects[ 0 ]->guid ="4f92ed09-80f7-498f-842f-9a40b11f3791";
        $this->data_transfer_objects[ 0 ]->name = "JasonWKeith.com";

        $this->data_transfer_objects[ 1 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 1 ]->history = $this->history_test_data_factory->create( 1 );        
        $this->data_transfer_objects[ 1 ]->guid ="958077c8-1406-4999-b1c3-d4f11ddf615b";        
        $this->data_transfer_objects[ 1 ]->name = "Otto";

        $this->data_transfer_objects[ 2 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 2 ]->history = $this->history_test_data_factory->create( 2 );        
        $this->data_transfer_objects[ 2 ]->guid ="f33c74c0-4454-4e79-93a2-5ec104210eae";        
        $this->data_transfer_objects[ 2 ]->name = "HAL";

        $this->data_transfer_objects[ 3 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 3 ]->history = $this->history_test_data_factory->create( 3 );        
        $this->data_transfer_objects[ 3 ]->guid  ="dcb68857-4786-4084-a82b-b15ef7798a4c";        
        $this->data_transfer_objects[ 3 ]->name = "Google.com";

        $this->data_transfer_objects[ 4 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 4 ]->history = $this->history_test_data_factory->create( 4 );        
        $this->data_transfer_objects[ 4 ]->guid ="0b05aab9-6e76-4687-9871-6cc381beb9b7";            
        $this->data_transfer_objects[ 4 ]->name = "Healthmate";

        $this->data_transfer_objects[ 5 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 5 ]->history = $this->history_test_data_factory->create( 5 );        
        $this->data_transfer_objects[ 5 ]->guid ="bad9e498-c7c2-444d-aa78-ecbead3bac2e";        
        $this->data_transfer_objects[ 5 ]->name = "Runkeeper";

        $this->data_transfer_objects[ 6 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 6 ]->history = $this->history_test_data_factory->create( 6 );        
        $this->data_transfer_objects[ 6 ]->guid ="4a2e0108-382f-408f-a360-62d2c2dc2dae";        
        $this->data_transfer_objects[ 6 ]->name = "Facebook";

        $this->data_transfer_objects[ 7 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 7 ]->history = $this->history_test_data_factory->create( 7 );        
        $this->data_transfer_objects[ 7 ]->guid ="246eb42f-997b-4fd2-ac87-c6d53e3943c2";        
        $this->data_transfer_objects[ 7 ]->name = "Twitter";

        $this->data_transfer_objects[ 8 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 8 ]->history = $this->history_test_data_factory->create( 8 );        
        $this->data_transfer_objects[ 8 ]->guid ="d32c0d2f-d514-41a3-ab67-2f9f19a64490";               
        $this->data_transfer_objects[ 8 ]->name = "Yahoo Fantasy Sports";

        $this->data_transfer_objects[ 9 ] = new ApplicationDataTransferObject;
        $this->data_transfer_objects[ 9 ]->history = $this->history_test_data_factory->create( 9 );        
        $this->data_transfer_objects[ 9 ]->guid ="e8aaf393-4367-4e6c-9734-820853ba7ebe";        
        $this->data_transfer_objects[ 9 ]->name = "StaleyNation";        
    }

    public function create( int $number ): ApplicationDataTransferObject
    {
        return $this->data_transfer_objects[ $number ];
    }
    
    public function createDefault(): ApplicationDataTransferObject
    {
        $dto = new ApplicationDataTransferObject;
        $dto->history = $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create( 0 );
        
        return $dto;
    }      
}