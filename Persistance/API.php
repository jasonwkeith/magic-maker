<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance;

use JasonWKeith\Application\Boundary\Persistance\APIInterface;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Book\BookRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Content\ContentRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\User\UserRepositoryInterface;

use JasonWKeith\Persistance\DataObject\Application\ApplicationRepositoryFactoryInterface;
use JasonWKeith\Persistance\DataObject\Book\BookRepositoryFactoryInterface;
use JasonWKeith\Persistance\DataObject\Content\ContentRepositoryFactoryInterface;
use JasonWKeith\Persistance\DataObject\Person\PersonRepositoryFactoryInterface;
use JasonWKeith\Persistance\DataObject\User\UserRepositoryFactoryInterface;

class API implements APIInterface
{
    public function __construct
    ( 
        ApplicationRepositoryFactoryInterface $application_repository_factory,        
        BookRepositoryFactoryInterface $book_repository_factory,
        ContentRepositoryFactoryInterface $content_repository_factory, 
        PersonRepositoryFactoryInterface $person_repository_factory,
        UserRepositoryFactoryInterface $user_repository_factory  
    )
    {
        $this->application_repository_factory = $application_repository_factory;           
        $this->book_repository_factory = $book_repository_factory;      
        $this->content_repository_factory = $content_repository_factory;  
        $this->person_repository_factory = $person_repository_factory;
        $this->user_repository_factory = $user_repository_factory;        
    }
    
    public function createApplicationRepository(): ApplicationRepositoryInterface
    {
        return $this->application_repository_factory->create();
    }    
    
    public function createBookRepository(): BookRepositoryInterface
    {
        return $this->book_repository_factory->create();
    }
    
    public function createContentRepository(): ContentRepositoryInterface
    {
        return $this->content_repository_factory->create();
    }   
    
    public function createPersonRepository(): PersonRepositoryInterface
    {
        return $this->person_repository_factory->create();
    }    

    public function createUserRepository(): UserRepositoryInterface
    {
        return $this->user_repository_factory->create();
    }    
}