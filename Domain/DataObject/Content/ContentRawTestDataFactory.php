<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class ContentRawTestDataFactory implements ContentRawTestDataFactoryInterface
{
    public function __construct( HistoryTestDataFactoryInterface $history_test_data_factory )
    {
        $this->history_test_data_factory = $history_test_data_factory;

        $this->guids[ 0 ] = "9e41e3a6-980b-4ac2-b985-4bccbb668204";
        $this->guids[ 1 ] = "26dbc77a-3fb8-47fc-890f-3bc49a62af84";  
        $this->guids[ 2 ] = "7a823666-b710-49bf-a6ac-7f2d817ddb85"; 
        $this->guids[ 3 ] = "d41cdec2-778d-4f50-9407-2ec9ce119b08";   
        $this->guids[ 4 ] = "fa8749b1-48c4-4f59-81b9-fb1b2b7e95ec";   
        $this->guids[ 5 ] = "a6d2c6c3-2a20-4d23-8f9f-2268c7e82b45";  
        $this->guids[ 6 ] = "45af3b87-6a67-43e9-8b42-ad901c9d2180";  
        $this->guids[ 7 ] = "8ec77762-5f13-444a-8090-39f9f4824547";   
        $this->guids[ 8 ] = "fc6a4e29-9d7a-4a21-9668-96a3ab4c9bd3";    
        $this->guids[ 9 ] = "c0095634-22a9-43a4-9410-d05e210ad0dc";  
   
    }

   public function create( int $number ): ContentDataTransferObject
   {
        $dto = new ContentDataTransferObject;
        $dto->guid = $this->guids[ $number ];
        $dto->history = $this->history_test_data_factory->create( $number );
        $dto->text = "Text Content $number";        
        return $dto;
   }
   
    public function createArray( int $number ): array
    {
        $raw_counter = $number;
        $books = array();
        
        for( $i = 0; $i < 4; $i++ )
        {
            if( $raw_counter > 9 )
            {
                $raw_counter = 0;
            }
            $books[ $i ] = $this->create( $raw_counter );
        }
        
        return $books;
    }     

   public function createDefault(): ContentDataTransferObject
   {
       return new ContentDataTranferObject;
   }      
    
    public function createRawWithText(): ContentDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->text = "People are AWESOME!";
        
        return $dto;
    }    
    
    public function createRawWithoutText(): ContentDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->text = "";
        
        return $dto;
    }     
}