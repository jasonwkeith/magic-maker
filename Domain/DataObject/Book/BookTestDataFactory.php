<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;

class BookTestDataFactory implements BookTestDataFactoryInterface
{
    public function __construct( BookFactoryInterface $book_factory, BookRawTestDataFactoryInterface $book_raw_test_data_factory )
    {
        $this->book_factory = $book_factory;
        $this->book_raw_test_data_factory = $book_raw_test_data_factory;
    }

    public function create( int $number ): BookInterface
    {
        return $this->book_factory->create( $this->book_raw_test_data_factory->create( $number ) );
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
    
    public function createDefault(): BookInterface
    {
        return $this->book_factory->create( $this->book_raw_test_data_factory->createDefault() );
    }
    
    public function createCollection( int $number ): BookCollectionInterface
    {
        return $this->book_factory->createCollection( ...$this->createArray( $number ) );
    }
    
    public function createRaw( int $number ): BookDataTransferObject
    {
        return $this->book_raw_test_data_factory->create( $number );
    }
    
    public function createRawDefault(): BookDataTransferObject
    {
        return $this->book_raw_test_data_factory->createDefault();
    }    
    
    public function createRawWithSubtitle(): BookDataTransferObject
    {
        return $this->book_raw_test_data_factory->createRawWithSubtitle();
    }    
    
    public function createRawWithoutSubtitle(): BookDataTransferObject
    {
        return $this->book_raw_test_data_factory->createRawWithoutSubtitle();
    }     
  
    public function createRawMultipleAuthors(): BookDataTransferObject
    {
        return $this->book_raw_test_data_factory->createRawMultipleAuthors();
    }   
    
    public function createWithSubtitle(): BookInterface
    {
        return $this->book_raw_test_data_factory->createRawWithSubtitle();
    }    
    
    public function createWithoutSubtitle(): BookInterface
    {
        return $this->book_raw_test_data_factory->createRawWithoutSubtitle();
    }     
  
    public function createMultipleAuthors(): BookInterface
    {
        return $this->book_raw_test_data_factory->createRawMultipleAuthors();
    }        
}