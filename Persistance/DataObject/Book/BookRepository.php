<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Book\BookRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;

class BookRepository implements BookRepositoryInterface
{
    public function __construct( BookPersisterInterface $persister, BookMapperInterface $mapper )
    {
        $this->persister = $persister;
        $this->mapper = $mapper;
    } 
    
    public function add(  BookInterface $book ): void
    {
        $data_object = $this->mapper->createDataObject( $book );
        $this->persister->write( $data_object );
    }

    public function get( string $guid ): BookInterface
    {
        $data_object = $this->persister->read( $guid );
        return $this->mapper->createEntity( $data_object );
    }   
    
    public function remove( string $guid ): void
    {
        $this->persister->remove( $guid );
    }    
}