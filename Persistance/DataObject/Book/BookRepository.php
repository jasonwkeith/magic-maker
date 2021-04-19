<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Book\BookRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Persistance\Infrastructure\Repository\RepositoryTrait;

class BookRepository implements BookRepositoryInterface
{
    use RepositoryTrait;
    
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
    
    public function getCollection( array $guids ): BookCollectionInterface
    {
        $data_objects = $this->persister->readCollection( $guids );        
        return $this->mapper->createEntityCollection( $data_objects );
    }
}