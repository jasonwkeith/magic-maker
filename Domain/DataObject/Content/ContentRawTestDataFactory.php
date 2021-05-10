<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;

class ContentRawTestDataFactory implements ContentRawTestDataFactoryInterface
{
    public function __construct( ContentFactoryInterface $content_factory )
    {
        $this->content_factory = $content_factory;

        $this->dto[ 0 ] = new ContentDataTransferObject;
        $this->dto[ 0 ]->guid ="9e41e3a6-980b-4ac2-b985-4bccbb668204";
        $this->dto[ 0 ]->text = "Test Content 0";

        $this->dto[ 1 ] = new ContentDataTransferObject;
        $this->dto[ 1 ]->guid ="26dbc77a-3fb8-47fc-890f-3bc49a62af84";        
        $this->dto[ 1 ]->text = "Test Content 1";
 
        $this->dto[ 2 ] = new ContentDataTransferObject;
        $this->dto[ 2 ]->guid ="7a823666-b710-49bf-a6ac-7f2d817ddb85";        
        $this->dto[ 2 ]->text = "Test Content 2";

        $this->dto[ 3 ] = new ContentDataTransferObject;
        $this->dto[ 3 ]->guid ="d41cdec2-778d-4f50-9407-2ec9ce119b08";        
        $this->dto[ 3 ]->text = "Test Content 3";

        $this->dto[ 4 ] = new ContentDataTransferObject;
        $this->dto[ 4 ]->guid ="fa8749b1-48c4-4f59-81b9-fb1b2b7e95ec";        
        $this->dto[ 4 ]->text = "Test Content 4";

        $this->dto[ 5 ] = new ContentDataTransferObject;
        $this->dto[ 5 ]->guid ="a6d2c6c3-2a20-4d23-8f9f-2268c7e82b45";        
        $this->dto[ 5 ]->text = "Test Content 5";

        $this->dto[ 6 ] = new ContentDataTransferObject;
        $this->dto[ 6 ]->guid ="45af3b87-6a67-43e9-8b42-ad901c9d2180";        
        $this->dto[ 6 ]->text = "Test Content 6";

        $this->dto[ 7 ] = new ContentDataTransferObject;
        $this->dto[ 7 ]->guid ="8ec77762-5f13-444a-8090-39f9f4824547";        
        $this->dto[ 7 ]->text = "Test Content 7";

        $this->dto[ 8 ] = new ContentDataTransferObject;
        $this->dto[ 8 ]->guid ="fc6a4e29-9d7a-4a21-9668-96a3ab4c9bd3";        
        $this->dto[ 8 ]->text = "Test Content 8";

        $this->dto[ 9 ] = new ContentDataTransferObject;
        $this->dto[ 9 ]->guid ="c0095634-22a9-43a4-9410-d05e210ad0dc";        
        $this->dto[ 9 ]->text = "Test Content 9";
   
    }

   public function create( int $number ): ContentDataTransferObject
   {
        return $this->dto[ $number]->duplicate();
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