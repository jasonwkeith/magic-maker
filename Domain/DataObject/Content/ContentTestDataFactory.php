<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\RawContentTestDataFactoryInterface;

class ContentTestDataFactory implements ContentTestDataFactoryInterface, RawContentTestDataFactoryInterface
{
    public function __construct( ContentFactoryInterface $Content_factory )
    {
        $this->content_factory = $Content_factory;
    }

    private function create( array $data ): ContentInterface
    {
        return $this->content_factory->create( $data[ ContentInterface::GUID ], $data[ ContentInterface::TEXT ] );
    }
    
    public function create0(): ContentInterface
    {
        return $this->create( $this->createRaw0() );
    }
    
    public function create1(): ContentInterface
    {
        return $this->create( $this->createRaw1() );
    }
    
    public function create2(): ContentInterface
    {
        return $this->create( $this->createRaw2() );
    }

    public function create3(): ContentInterface
    {
        return $this->create( $this->createRaw3() );
    }  
    
    public function create4(): ContentInterface
    {
        return $this->create( $this->createRaw4() );
    }  
    
    public function create5(): ContentInterface
    {
        return $this->create( $this->createRaw5() );
    }    

    public function create6(): ContentInterface
    {
        return $this->create( $this->createRaw6() );
    }   
    
    public function create7(): ContentInterface
    {
        return $this->create( $this->createRaw7() );
    } 
    
    public function create8(): ContentInterface
    {
        return $this->create( $this->createRaw8() );
    }   
    
    public function create9(): ContentInterface
    {
        return $this->create( $this->createRaw9() );
    }  
    
    public function createDefault(): ContentInterface
    {
        return $this->create( $this->createRawDefault() );
    }

    public function createArray0(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw0() );
        $Contents[ 1 ] = $this->create( $this->createRaw1() );
        $Contents[ 2 ] = $this->create( $this->createRaw2() );    
        return $Contents;
    }      
    
    public function createArray1(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw1() );
        $Contents[ 1 ] = $this->create( $this->createRaw2() );
        $Contents[ 2 ] = $this->create( $this->createRaw3() );   
        return $Contents;
    }      
    
    public function createArray2(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw2() );
        $Contents[ 1 ] = $this->create( $this->createRaw3() );
        $Contents[ 2 ] = $this->create( $this->createRaw4() );     
        return $Contents;
    }      
    
    public function createArray3(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw3() );
        $Contents[ 1 ] = $this->create( $this->createRaw4() );
        $Contents[ 2 ] = $this->create( $this->createRaw5() );    
        return $Contents;
    }     
    
    public function createArray4(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw4() );
        $Contents[ 1 ] = $this->create( $this->createRaw5() );
        $Contents[ 2 ] = $this->create( $this->createRaw6() );  
        return $Contents;
    }    
    
    public function createArray5(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw5() );
        $Contents[ 1 ] = $this->create( $this->createRaw6() );
        $Contents[ 2 ] = $this->create( $this->createRaw7() );   
        return $Contents;
    }      
    
    public function createArray6(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw6() );
        $Contents[ 1 ] = $this->create( $this->createRaw7() );
        $Contents[ 2 ] = $this->create( $this->createRaw8() );    
        return $Contents;
    } 
    
    public function createArray7(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw7() );
        $Contents[ 1 ] = $this->create( $this->createRaw8() );
        $Contents[ 2 ] = $this->create( $this->createRaw9() );    
        return $Contents;
    }  
    
    public function createArray8(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw8() );
        $Contents[ 1 ] = $this->create( $this->createRaw9() );
        $Contents[ 2 ] = $this->create( $this->createRaw0() );     
        return $Contents;
    }  
    
    public function createArray9(): Array
    {
        $Contents[ 0 ] = $this->create( $this->createRaw9() );
        $Contents[ 1 ] = $this->create( $this->createRaw0() );
        $Contents[ 2 ] = $this->create( $this->createRaw1() );     
        return $Contents;
    }      

    public function createCollection0(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray0() );
    }
    
    public function createCollection1(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray1() );
    }    
    
    public function createCollection2(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray2() );
    }      
    
    public function createCollection3(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray3() );
    }      
    
    public function createCollection4(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray4() );
    }      
    
    public function createCollection5(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray5() );
    }      
    
    public function createCollection6(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray6() );
    }      
    
    public function createCollection7(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray8() );
    }      
    
    public function createCollection8(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray8() );
    }      
    
    public function createCollection9(): ContentCollectionInterface
    {
        return $this->content_factory->createCollection( ...$this->createArray9() );
    }      

    public function createRaw0(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="9e41e3a6-980b-4ac2-b985-4bccbb668204";
        $dto[ ContentInterface::TEXT ] = "Test Content 0";           
        return $dto;
    }
    
    public function createRaw1(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="26dbc77a-3fb8-47fc-890f-3bc49a62af84";        
        $dto[ ContentInterface::TEXT ] = "Test Content 1";             
        return $dto;
    }
    
    public function createRaw2(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="7a823666-b710-49bf-a6ac-7f2d817ddb85";        
        $dto[ ContentInterface::TEXT ] = "Test Content 2";         
        return $dto;
    }

    public function createRaw3(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="d41cdec2-778d-4f50-9407-2ec9ce119b08";        
        $dto[ ContentInterface::TEXT ] = "Test Content 3"; 
        return $dto;
    }  
    
    public function createRaw4(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="fa8749b1-48c4-4f59-81b9-fb1b2b7e95ec";        
        $dto[ ContentInterface::TEXT ] = "Test Content 4"; 
        return $dto;
    }  
    
    public function createRaw5(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="6f5ccca4-fd90-4f14-a6f2-236561a0187b";        
        $dto[ ContentInterface::TEXT ] = "Test Content 5"; 
        return $dto;
    }    

    public function createRaw6(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="a6d2c6c3-2a20-4d23-8f9f-2268c7e82b45";        
        $dto[ ContentInterface::TEXT ] = "Test Content 6"; 
        return $dto;
    }   
    
    public function createRaw7(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="0d91b8c7-5887-473e-a9fc-8e9c3a4b9ba0";        
        $dto[ ContentInterface::TEXT ] = "Test Content 7"; 
        return $dto;
    } 
    
    public function createRaw8(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="8ec77762-5f13-444a-8090-39f9f4824547";        
        $dto[ ContentInterface::TEXT ] = "Test Content 8"; 
        return $dto;
    }   
    
    public function createRaw9(): array
    {
        $dto = $this->content_factory->createDTO();
        $dto[ ContentInterface::GUID ] ="fc6a4e29-9d7a-4a21-9668-96a3ab4c9bd3";        
        $dto[ ContentInterface::TEXT ] = "Test Content 9"; 
        return $dto;
    }  

    public function createRawDefault(): array
    {
        return $this->createRaw0();
    }    
    
}