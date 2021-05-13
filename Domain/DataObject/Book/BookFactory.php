<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class BookFactory implements BookFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;
    }
    
    public function create( BookDataTransferObject $book_data_transfer_object ): BookInterface
    {
        return new Book
        ( 
            $this->exception_factory, 
            $book_data_transfer_object->guid, 
            $book_data_transfer_object->history, 
            $book_data_transfer_object->authors, 
            $book_data_transfer_object->published_year, 
            $book_data_transfer_object->title, 
            $book_data_transfer_object->subtitle 
        );
    }
    
    public function createCollection( BookInterface ...$books ): BookCollectionInterface
    {
        return new BookCollection( $this->exception_factory, ...$books );
    }    
    
    public function createDataTransferObject(): BookDataTransferObject
    {
        return new BookDataTransferObject;
    }
    
    public function createEmptyCollection(): BookCollectionInterface
    {
        return new BookCollection( $this->exception_factory, null );
    }       
    
    public function createDTO(): array
    {
        $dto = array();
        $dto[ BookInterface::GUID ] ="";
        $dto[ BookInterface::AUTHORS ] = "";
        $dto[ BookInterface::PUBLISHED_YEAR ] =0;
        $dto[ BookInterface::SUBTITLE ] = "";
        $dto[ BookInterface::TITLE ] ="";

        return $dto;
    }    
}