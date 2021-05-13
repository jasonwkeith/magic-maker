<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

class BookMapperFactory implements BookMapperFactoryInterface
{
    public function __construct
    ( 
        BookFactoryInterface $entity_factory, 
        BookDataObjectFactoryInterface $data_object_factory, 
        PersonRepositoryInterface $person_repository, 
        HistoryMapperInterface $history_mapper  
    )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
        $this->person_repository = $person_repository;
        $this->history_mapper = $history_mapper;
    }

    public function create(): BookMapperInterface
    {
        return new BookMapper( $this->entity_factory, $this->data_object_factory, $this->person_repository, $this->history_mapper );
    }
}