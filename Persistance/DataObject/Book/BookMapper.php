<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;

class BookMapper implements BookMapperInterface
{
    public function __construct( BookFactoryInterface $book_factory, BookDataObjectFactoryInterface $book_data_object_factory, PersonRepositoryInterface $person_repository )
    {
        $this->book_factory = $book_factory;
        $this->book_data_object_factory = $book_data_object_factory;
        $this->person_repository = $person_repository;
    }

    public function createDataObject( BookInterface $book ): BookDataObject
    {
        $author_guids = array();
        $authors = $book->getAuthors();
        foreach( $authors as $author )
        {
            array_push( $author_guids, $author->getGUID() );        
        }

        return $this->book_data_object_factory->create( $book->getGUID(), $author_guids, $book->getPublishedYear(), $book->getSubtitle(), $book->getTitle() );
    }
    
    public function createEntity( BookDataObjectInterface $data_object ): BookInterface
    {
        $author_guids = $data_object->getAuthorGUIDs();
        $author_collection = $this->person_repository->getCollection( $author_guids );
        
        return $this->book_factory->create( $data_object->getGUID(), $author_collection, $data_object->getPublishedYear(), $data_object->getTitle(), $data_object->getSubtitle() );
    }
    
    public function createEntityCollection( BookDataObjectCollectionInterface $data_objects ): BookCollectionInterface
    {
        $books = array();
        foreach( $data_objects as $data_object )
        {
            $author_guids = $data_object->getAuthorGUIDs();
            $author_collection = $this->person_repository->getCollection( $author_guids );
            array_push( $books, $this->book_factory->create( $data_object->getGUID(), $author_collection, $data_object->getPublishedYear(), $data_object->getTitle(), $data_object->getSubtitle() ) );
        }
        
        return $this->book_factory->createCollection( ...$books );
    }     
}