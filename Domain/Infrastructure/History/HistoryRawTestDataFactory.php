<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryRawTestDataFactoryInterface;

class HistoryRawTestDataFactory implements HistoryRawTestDataFactoryInterface
{
    public function __construct
    ( 
        DateTimeTestDataFactoryInterface $date_time_test_data_factory
    )
    {
        $this->date_time_test_data_factory = $date_time_test_data_factory;    

        $guids = array();
        $guids[ 0 ] = "67a3fb8c-10b6-47d7-8e6f-6b55a545d46f";
        $guids[ 1 ] = "7801f6c7-2f27-4fb2-9c89-793a9f432fab";
        $guids[ 2 ] = "62d3dcc0-127e-4a35-b82c-9d4af515f806";
        $guids[ 3 ] = "8f6a357f-461d-4b95-a346-71d83847d871";
        $guids[ 4 ] = "8da420c8-4f9e-42d5-a873-55ba2606dbe2";
        $guids[ 5 ] = "8fad2281-8ac4-4a08-a72c-c0f710aa61ef";
        $guids[ 6 ] = "e848f8c6-c3ad-4f75-b00b-be8701b5c624";
        $guids[ 7 ] = "66dbd9dc-3ea8-4be9-9482-dd838ce5e315";
        $guids[ 8 ] = "95137aa9-34c1-459b-b515-621eb8373c35";
        $guids[ 9 ] = "e8b22881-fa05-44a2-9e1b-3856b4c8067c";
        
        $this->data_transfer_objects = array();

        for( $i = 0; $i < 5; $i++ )
        {
            $this->data_transfer_objects[ $i ] = new HistoryDataTransferObject;
            $this->data_transfer_objects[ $i ]->created_by = $guids[ $i ];
            $this->data_transfer_objects[ $i ]->updated_by = $guids[ $i + 1 ];
            $this->data_transfer_objects[ $i ]->created_date = $this->date_time_test_data_factory->create( $i );
            $this->data_transfer_objects[ $i ]->updated_date = $this->date_time_test_data_factory->create( $i +10 );        
        }
        
        for( $i = 5; $i < 20; $i++ )
        {
            $j = $i;
            if( $j > 9 )
            {
                $j = $j - 10;
            }
            $this->data_transfer_objects[ $i ] = new HistoryDataTransferObject;
            $this->data_transfer_objects[ $i ]->created_by = $guids[ $j ];
            $this->data_transfer_objects[ $i ]->updated_by = "";
            $this->data_transfer_objects[ $i ]->created_date = $this->date_time_test_data_factory->create( $i );
            $this->data_transfer_objects[ $i ]->updated_date = null;        
        }        


    }

    public function create( int $number ): HistoryDataTransferObject
    {
       return $this->data_transfer_objects[ $number ];
    }
   
    public function createDefault(): HistoryDataTransferObject
    {
       return new HistoryDataTransferObject;
    }   
    
    public function createModified(): HistoryDataTransferObject
    {
        $data_transfer_object = $this->createUnmodified();
        $data_transfer_object->updated_by = "f3205bd2-9c08-4ef7-aaec-0fd40d05bada";
        $data_transfer_object->updated_date = $this->date_time_test_data_factory->create( 11 );
        
        return $data_transfer_object;
    }
    
    public function createUnmodified(): HistoryDataTransferObject
    {
        $data_transfer_object = new HistoryDataTransferObject;
        $data_transfer_object->created_by = "6abda769-eacb-4026-b20b-b694d94cabf8";
        $data_transfer_object->created_date = $this->date_time_test_data_factory->create( 0 );
        $data_transfer_object->updated_by = null;
        $data_transfer_object->updated_date = null;
        
        return $data_transfer_object;
    }    
}