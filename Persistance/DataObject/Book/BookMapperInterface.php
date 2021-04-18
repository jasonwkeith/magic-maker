<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;

interface BookMapperInterface
{
    public function __construct( BookFactoryInterface $book_factory, BookDataObjectFactoryInterface $book_data_object_factory, PersonRepositoryInterface $person_repository );
    public function createDataObject( BookInterface $book ): BookDataObject;
    public function createEntity( BookDataObjectInterface $data_object ): BookInterface;
}