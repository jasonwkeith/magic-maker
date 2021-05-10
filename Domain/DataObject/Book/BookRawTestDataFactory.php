<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;

class BookRawTestDataFactory implements BookRawTestDataFactoryInterface
{
    public function __construct( BookFactoryInterface $book_factory, PersonTestDataFactoryInterface $person_test_data_factory )
    {
        $this->book_factory = $book_factory;
        $this->person_test_data_factory = $person_test_data_factory;
        
        $this->dto[ 0 ] = new BookDataTransferObject;
        $this->dto[ 0 ]->guid ="39c734cd-6082-4c1d-8d8e-766e7c18d757";
        $this->dto[ 0 ]->authors= $this->person_test_data_factory->createCollection( 0 );
        $this->dto[ 0 ]->published_year= 1978;
        $this->dto[ 0 ]->subtitle= "How everything you know about Rhinos is wrong";
        $this->dto[ 0 ]->title= "Rhinoceros Success";

        $this->dto[ 1 ] = new BookDataTransferObject;
        $this->dto[ 1 ]->guid ="5e85781a-ef8f-4cf1-b9e3-16ccee5c59b9";        
        $this->dto[ 1 ]->authors= $this->person_test_data_factory->createCollection( 1 );
        $this->dto[ 1 ]->published_year= 1978;
        $this->dto[ 1 ]->subtitle= "How to stopping digging holes with new ideas";
        $this->dto[ 1 ]->title= "Innovation Stack";
 
        $this->dto[ 2 ] = new BookDataTransferObject;
        $this->dto[ 2 ]->guid ="832abfd0-c13e-44b9-a5da-7ff4f0233142";        
        $this->dto[ 2 ]->authors= $this->person_test_data_factory->createCollection( 2 );
        $this->dto[ 2 ]->published_year= 1988;
        $this->dto[ 2 ]->subtitle= "Its the Zombiepocolypse";
        $this->dto[ 2 ]->title= "Dead Companies Walking";

        $this->dto[ 3 ] = new BookDataTransferObject;
        $this->dto[ 3 ]->guid ="90320091-e4ab-4eb9-9be0-7bd8a3f2965c";        
        $this->dto[ 3 ]->authors= $this->person_test_data_factory->createCollection( 3 );
        $this->dto[ 3 ]->published_year= 1992;
        $this->dto[ 3 ]->subtitle= "Because your kids are socialists";
        $this->dto[ 3 ]->title= "Post Capitalist Society";

        $this->dto[ 4 ] = new BookDataTransferObject;
        $this->dto[ 4 ]->guid ="10a1a17f-4f15-4c8b-a516-938c4746f685";        
        $this->dto[ 4 ]->authors= $this->person_test_data_factory->createCollection( 4 );
        $this->dto[ 4 ]->published_year= 1998;
        $this->dto[ 4 ]->subtitle= "Where your leadership should be taking you";
        $this->dto[ 4 ]->title= "True North";

        $this->dto[ 5 ] = new BookDataTransferObject;
        $this->dto[ 5 ]->guid ="74e8bbf9-249a-452b-a518-a465f1d64ba5";        
        $this->dto[ 5 ]->authors= $this->person_test_data_factory->createCollection( 5 );
        $this->dto[ 5 ]->published_year= 2010;
        $this->dto[ 5 ]->subtitle= "Because your employees suck";
        $this->dto[ 5 ]->title= "Extreme Ownership";

        
        $this->dto[ 6 ] = new BookDataTransferObject;
        $this->dto[ 6 ]->guid ="45af3b87-6a67-43e9-8b42-ad901c9d2180";        
        $this->dto[ 6 ]->authors= $this->person_test_data_factory->createCollection( 6 );
        $this->dto[ 6 ]->published_year= 2015;
        $this->dto[ 6 ]->subtitle= "Five hats are so prepandemic";
        $this->dto[ 6 ]->title= "Six Thinking Hats";

        
        $this->dto[ 7 ] = new BookDataTransferObject;
        $this->dto[ 7 ]->guid ="445e6049-829d-4f7b-a3aa-92c1274f7e31";        
        $this->dto[ 7 ]->authors= $this->person_test_data_factory->createCollection( 7 );
        $this->dto[ 7 ]->published_year= 2018;
        $this->dto[ 7 ]->subtitle= "They are hard!";
        $this->dto[ 7 ]->title= "The Hard Thing About Hard Things";

        $this->dto[ 8 ] = new BookDataTransferObject;
        $this->dto[ 8 ]->guid ="ded02299-91e1-41af-affb-529bd0a72dca";        
        $this->dto[ 8 ]->authors= $this->person_test_data_factory->createCollection( 8 );
        $this->dto[ 8 ]->published_year= 2020;
        $this->dto[ 8 ]->subtitle= "Economimists deny science";
        $this->dto[ 8 ]->title= "The World is Flat";

        $this->dto[ 9 ] = new BookDataTransferObject;
        $this->dto[ 9 ]->guid ="c5db4631-33a8-4b7e-9049-509cf771c6d2";        
        $this->dto[ 9 ]->authors= $this->person_test_data_factory->createCollection( 9 );
        $this->dto[ 9 ]->published_year= 2029;
        $this->dto[ 9 ]->subtitle= "Not to be confused with getting to yes";
        $this->dto[ 9 ]->title = "Getting Past No";
   
    }

   public function create( int $number ): BookDataTransferObject
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

   public function createDefault(): BookDataTransferObject
   {
       return new BookDataTransferObject;
   }      
    
    public function createRawWithSubtitle(): BookDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->subtitle= "People are AWESOME!";
        
        return $dto;
    }    
    
    public function createRawWithoutSubtitle(): BookDataTransferObject
    {
        $dto = $this->create( 0 );
        $dto->subtitle = "";
        
        return $dto;
    }     
  
    public function createRawMultipleAuthors(): BookDataTransferObject
    {
        return $this->create( 0 );
    }       
}