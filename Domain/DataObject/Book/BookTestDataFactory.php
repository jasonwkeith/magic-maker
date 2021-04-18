<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\RawBookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;

class BookTestDataFactory implements BookTestDataFactoryInterface, RawBookTestDataFactoryInterface
{
    public function __construct( BookFactoryInterface $book_factory, PersonTestDataFactoryInterface $person_test_data_factory )
    {
        $this->book_factory = $book_factory;
        $this->person_test_data_factory = $person_test_data_factory;
    }

    private function create( array $data ): BookInterface
    {
        return $this->book_factory->create( $data[ BookInterface::GUID ], $data[ BookInterface::AUTHORS ], $data[ BookInterface::PUBLISHED_YEAR ], $data[ BookInterface::TITLE ], $data[ BookInterface::SUBTITLE ] );
    }
    
    public function create0(): BookInterface
    {
        return $this->create( $this->createRaw0() );
    }
    
    public function create1(): BookInterface
    {
        return $this->create( $this->createRaw1() );
    }
    
    public function create2(): BookInterface
    {
        return $this->create( $this->createRaw2() );
    }

    public function create3(): BookInterface
    {
        return $this->create( $this->createRaw3() );
    }  
    
    public function create4(): BookInterface
    {
        return $this->create( $this->createRaw4() );
    }  
    
    public function create5(): BookInterface
    {
        return $this->create( $this->createRaw5() );
    }    

    public function create6(): BookInterface
    {
        return $this->create( $this->createRaw6() );
    }   
    
    public function create7(): BookInterface
    {
        return $this->create( $this->createRaw7() );
    } 
    
    public function create8(): BookInterface
    {
        return $this->create( $this->createRaw8() );
    }   
    
    public function create9(): BookInterface
    {
        return $this->create( $this->createRaw9() );
    }  
    
    public function createDefault(): BookInterface
    {
        return $this->create( $this->createRawDefault() );
    }

    public function createArray0(): Array
    {
        $books[ 0 ] = $this->create( $this->createRaw0() );
        $books[ 1 ] = $this->create( $this->createRaw1() );
        $books[ 2 ] = $this->create( $this->createRaw2() );    
        $books[ 3 ] = $this->create( $this->createRaw3() );    
        
        return $books;
    }      
    
    public function createCollection0(): BookCollectionInterface
    {
        return $this->createCollection( $this->createArray() );
    }

   public function createRaw0(): array
    {
        $dto = $this->book_factory->createDTO();
        
        
        $dto[ BookInterface::GUID ] ="39c734cd-6082-4c1d-8d8e-766e7c18d757";
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection0();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 1978;
        $dto[ BookInterface::SUBTITLE ] = "How everything you know about Rhinos is wrong";
        $dto[ BookInterface::TITLE ] = "Rhinoceros Success";
        $dto[ BookInterface::TITLE ] = "Book0"; 
        return $dto;
    }
    
    public function createRaw1(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="5e85781a-ef8f-4cf1-b9e3-16ccee5c59b9";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 1978;
        $dto[ BookInterface::SUBTITLE ] = "How to stopping digging holes with new ideas";
        $dto[ BookInterface::TITLE ] = "Innovation Stack";
        $dto[ BookInterface::TITLE ] = "Book1"; 
        return $dto;
    }
    
    public function createRaw2(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="832abfd0-c13e-44b9-a5da-7ff4f0233142";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 1988;
        $dto[ BookInterface::SUBTITLE ] = "Its the Zombiepocolypse";
        $dto[ BookInterface::TITLE ] = "Dead Companies Walking";
        $dto[ BookInterface::TITLE ] = "Book2"; 
        return $dto;
    }

    public function createRaw3(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="90320091-e4ab-4eb9-9be0-7bd8a3f2965c";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection0();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 1992;
        $dto[ BookInterface::SUBTITLE ] = "Because your kids are socialists";
        $dto[ BookInterface::TITLE ] = "Post Capitalist Society";
        $dto[ BookInterface::TITLE ] = "Book3"; 
        return $dto;
    }  
    
    public function createRaw4(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="10a1a17f-4f15-4c8b-a516-938c4746f685";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 1998;
        $dto[ BookInterface::SUBTITLE ] = "Where your leadership should be taking you";
        $dto[ BookInterface::TITLE ] = "True North";
        $dto[ BookInterface::TITLE ] = "Book4"; 
        return $dto;
    }  
    
    public function createRaw5(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="74e8bbf9-249a-452b-a518-a465f1d64ba5";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 2010;
        $dto[ BookInterface::SUBTITLE ] = "Because your employees suck";
        $dto[ BookInterface::TITLE ] = "Extreme Ownership";
        $dto[ BookInterface::TITLE ] = "Book5";  
        return $dto;
    }    

    public function createRaw6(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="45af3b87-6a67-43e9-8b42-ad901c9d2180";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection0();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 2015;
        $dto[ BookInterface::SUBTITLE ] = "Five hats are so prepandemic";
        $dto[ BookInterface::TITLE ] = "Six Thinking Hats";
        $dto[ BookInterface::TITLE ] = "Book6"; 
        return $dto;
    }   
    
    public function createRaw7(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="445e6049-829d-4f7b-a3aa-92c1274f7e31";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection0();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 2018;
        $dto[ BookInterface::SUBTITLE ] = "They are hard!";
        $dto[ BookInterface::TITLE ] = "The Hard Thing About Hard Things";
        $dto[ BookInterface::TITLE ] = "Book7"; 
        return $dto;
    } 
    
    public function createRaw8(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="ded02299-91e1-41af-affb-529bd0a72dca";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 2020;
        $dto[ BookInterface::SUBTITLE ] = "Economimists deny science";
        $dto[ BookInterface::TITLE ] = "The World is Flat";
        $dto[ BookInterface::TITLE ] = "Book8";
        return $dto;
    }   
    
    public function createRaw9(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::GUID ] ="c5db4631-33a8-4b7e-9049-509cf771c6d2";        
        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();
        $dto[ BookInterface::PUBLISHED_YEAR ] = 2029;
        $dto[ BookInterface::SUBTITLE ] = "Not to be confused with getting to yes";
        $dto[ BookInterface::TITLE ] = "Getting Past No";
        $dto[ BookInterface::TITLE ] = "Book9";
        return $dto;
    }  
    
    public function createRawDefault(): array
    {
        $dto = $this->book_factory->createDTO();
        $dto[ BookInterface::AUTHORS ] =  $this->person_test_data_factory->createCollectionDefault();
        $dto[ BookInterface::SUBTITLE ] = "";
        
        return $dto;
    }      
    
    public function createRawSubtitle(): array
    {
        $dto = $this->createRawDefault();
        $dto[ BookInterface::SUBTITLE ] = "People are AWESOME!";
        
        return $dto;
    }    
    
    public function createRawDefaultSubtitle(): array
    {
        $dto = $this->createRawDefault();
        $dto[ BookInterface::SUBTITLE ] = $default_dto[ BookInterface::SUBTITLE ];
        
        return $dto;
    }     
  
    public function createRawMultipleAuthors(): array
    {
     
        $dto = $this->createRawDefault();

        return $dto;
    }       
}