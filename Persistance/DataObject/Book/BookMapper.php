<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

class BookMapper implements BookMapperInterface
{
    public function __construct( BookFactoryInterface $book_factory, BookDataObjectFactoryInterface $book_data_object_factory, PersonRepositoryInterface $person_repository, HistoryMapperInterface $history_mapper )
    {
        $this->book_entity_factory = $book_factory;
        $this->book_data_object_factory = $book_data_object_factory;
        $this->person_repository = $person_repository;
        $this->history_mapper = $history_mapper;        
    }

    public function createDataObject( BookInterface $book ): BookDataObject
    {
        $author_guids = array();
        $authors = $book->getAuthors();
        foreach( $authors as $author )
        {
            array_push( $author_guids, $author->getGUID() );        
        }
        
        $history_data_object = $this->history_mapper->createDataObject( $book->getCreatedBy(), $book->getCreatedDate(), $book->getUpdatedBy(), $book->getUpdatedDate() );
        return $this->book_data_object_factory->create( $book->getGUID(), $history_data_object , $author_guids, $book->getPublishedYear(), $book->getSubtitle(), $book->getTitle() );
    }
    
    public function createEntity( BookDataObjectInterface $data_object ): BookInterface
    {
        $author_guids = $data_object->getAuthorGUIDs();
        $author_collection = $this->person_repository->getCollection( $author_guids );
        
        $data_transfer_object = $this->book_entity_factory->createDataTransferObject();
        $data_transfer_object->guid = $data_object->getGUID();
        $data_transfer_object->history = $this->history_mapper->createEntity( $data_object->getHistory() );        
        $data_transfer_object->authors = $author_collection;
        $data_transfer_object->published_year = $data_object->getPublishedYear();
        $data_transfer_object->title = $data_object->getTitle();
        $data_transfer_object->subtitle = $data_object->getSubtitle();

        return $this->book_entity_factory->create( $data_transfer_object );
    }
    
    public function createEntityCollection( BookDataObjectCollectionInterface $data_objects ): BookCollectionInterface
    {
        $books = array();
        foreach( $data_objects as $data_object )
        {
            array_push( $books, $this->createEntity( $data_object ) );
        }
        
        return $this->book_entity_factory->createCollection( ...$books );
    }     
}