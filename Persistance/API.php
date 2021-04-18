<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance;

use JasonWKeith\Application\Boundary\Persistance\APIInterface;
use JasonWKeith\Application\Boundary\Persistance\Book\BookRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;

use JasonWKeith\Persistance\DataObject\Book\BookRepositoryFactoryInterface;
use JasonWKeith\Persistance\DataObject\Person\PersonRepositoryFactoryInterface;

class API implements APIInterface
{
    public function __construct
    ( 
        BookRepositoryFactoryInterface $book_repository_factory,
        PersonRepositoryFactoryInterface $person_repository_factory
    )
    {
        $this->book_repository_factory = $book_repository_factory;        
        $this->person_repository_factory = $person_repository_factory;
    }
    
    public function createBookRepository(): BookRepositoryInterface
    {
        return $this->book_repository_factory->create();
    }
    
    public function createPersonRepository(): PersonRepositoryInterface
    {
        return $this->person_repository_factory->create();
    }    
}