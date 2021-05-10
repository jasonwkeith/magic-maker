<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;

class ContentTestDataFactory implements ContentTestDataFactoryInterface
{
    public function __construct( ContentFactoryInterface $entity_factory, ContentRawTestDataFactoryInterface $entity_raw_test_data_factory )
    {
        $this->entity_factory = $entity_factory;
        $this->entity_raw_test_data_factory = $entity_raw_test_data_factory;
    }

    public function create( int $number ): ContentInterface
    {
        return $this->entity_factory->create( $this->entity_raw_test_data_factory->create( $number ) );
    }
    
    public function createArray( int $number ): array
    {
        $raw_counter = $number;
        $users = array();
        
        for( $i = 0; $i < 4; $i++ )
        {
            if( $raw_counter > 9 )
            {
                $raw_counter = 0;
            }
            $users[ $i ] = $this->create( $raw_counter );
        }
        
        return $users;
    }      
    
    public function createDefault(): ContentInterface
    {
        return $this->entity_factory->create( $this->entity_raw_test_data_factory->createDefault() );
    }
    
    public function createCollection( int $number ): ContentCollectionInterface
    {
        return $this->entity_factory->createCollection( ...$this->createArray( $number ) );
    }
    
    public function createRaw( int $number ): ContentDataTransferObject
    {
        return $this->entity_raw_test_data_factory->create( $number );
    }
    
    public function createRawDefault(): ContentDataTransferObject
    {
        return $this->entity_raw_test_data_factory->createDefault();
    }  
    
    public function createRawWithText(): ContentDataTransferObject
    {
        return $this->entity_raw_test_data_factory->createRawWithText();
    }
    
    public function createRawWithoutText(): ContentDataTransferObject
    {
        return $this->entity_raw_test_data_factory->createRawWithoutText();
    }
}