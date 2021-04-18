<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Book\BookRepositoryInterface;

interface BookRepositoryFactoryInterface
{
    public function __construct( BookPersisterInterface $persister, BookMapperInterface $book_mapper );
    public function create(): BookRepositoryInterface;
}