<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Book\BookRepositoryInterface;

class BookRepositoryFactory implements BookRepositoryFactoryInterface
{
    public function __construct( BookPersisterInterface $persister, BookMapperInterface $book_mapper )
    {
        $this->persister = $persister;
        $this->book_mapper = $book_mapper;
    }
    
    public function create(): BookRepositoryInterface
    {
        return new BookRepository( $this->persister, $this->book_mapper );
    }
}