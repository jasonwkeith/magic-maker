<?php
declare( strict_types = 1 );
namespace JasonWKeith\Application\Boundary\Persistance;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Book\BookRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Content\ContentRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\User\UserRepositoryInterface;

interface APIInterface 
{
    public function createApplicationRepository(): ApplicationRepositoryInterface;    
    public function createBookRepository(): BookRepositoryInterface;    
    public function createContentRepository(): ContentRepositoryInterface;    
    public function createPersonRepository(): PersonRepositoryInterface;
    public function createUserRepository(): UserRepositoryInterface;        
}