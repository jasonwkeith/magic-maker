<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class BookRawTestDataFactory implements BookRawTestDataFactoryInterface
{
    public function __construct( HistoryTestDataFactoryInterface $history_test_data_factory, PersonTestDataFactoryInterface $person_test_data_factory )
    {
        $this->history_test_data_factory = $history_test_data_factory;            
        $this->person_test_data_factory = $person_test_data_factory;
        
        $this->guids[ 0 ] = "39c734cd-6082-4c1d-8d8e-766e7c18d757";
        $this->guids[ 1 ] = "5e85781a-ef8f-4cf1-b9e3-16ccee5c59b9";  
        $this->guids[ 2 ] = "832abfd0-c13e-44b9-a5da-7ff4f0233142"; 
        $this->guids[ 3 ] = "90320091-e4ab-4eb9-9be0-7bd8a3f2965c";   
        $this->guids[ 4 ] = "10a1a17f-4f15-4c8b-a516-938c4746f685";   
        $this->guids[ 5 ] = "74e8bbf9-249a-452b-a518-a465f1d64ba5";  
        $this->guids[ 6 ] = "45af3b87-6a67-43e9-8b42-ad901c9d2180";  
        $this->guids[ 7 ] = "445e6049-829d-4f7b-a3aa-92c1274f7e31";   
        $this->guids[ 8 ] = "ded02299-91e1-41af-affb-529bd0a72dca";    
        $this->guids[ 9 ] = "c5db4631-33a8-4b7e-9049-509cf771c6d2";  

        $this->published_years[ 0 ] = 1873;
        $this->published_years[ 1 ] = 1978;
        $this->published_years[ 2 ] = 1988;
        $this->published_years[ 3 ] = 1992;
        $this->published_years[ 4 ] = 1998;
        $this->published_years[ 5 ] = 2010;
        $this->published_years[ 6 ] = 2015;
        $this->published_years[ 7 ] = 2018;
        $this->published_years[ 8 ] = 2020;
        $this->published_years[ 9 ] = 2029;

        
        $this->subtitles[ 0 ] = "How everything you know about Rhinos is wrong";
        $this->subtitles[ 1 ] = "How to stopping digging holes with new ideas";
        $this->subtitles[ 2 ] = "Its the Zombiepocolypse";
        $this->subtitles[ 3 ] = "Because your kids are socialists";
        $this->subtitles[ 4 ] = "Where your leadership should be taking you";
        $this->subtitles[ 5 ] = "Because your employees suck";     
        $this->subtitles[ 6 ] = "Five hats are so prepandemic";
        $this->subtitles[ 7 ] = "They are hard!";
        $this->subtitles[ 8 ] = "Economimists deny science";
        $this->subtitles[ 9 ] = "Not to be confused with getting to yes";  
        
        $this->titles[ 0 ] = "Rhinoceros Success";        
        $this->titles[ 1 ] = "Innovation Stack";
        $this->titles[ 2 ] = "Dead Companies Walking";
        $this->titles[ 3 ] = "Post Capitalist Society";
        $this->titles[ 4 ] = "True North";
        $this->titles[ 5 ] = "Extreme Ownership";        
        $this->titles[ 6 ] = "Six Thinking Hats";
        $this->titles[ 7 ] = "The Hard Thing About Hard Things";
        $this->titles[ 8 ] = "The World is Flat";
        $this->titles[ 9 ] = "Getting Past No";
   
    }

   public function create( int $number ): BookDataTransferObject
   {
       
        $dto = new BookDataTransferObject;
        $dto->guid = $this->guids[ $number ];
        $dto->history = $this->history_test_data_factory->create( $number );
        $dto->authors = $this->person_test_data_factory->createCollection( $number );
        $dto->published_year = $this->published_years[ $number ];
        $dto->subtitle = $this->subtitles[ $number ];
        $dto->title = $this->titles[ $number ];
       
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