<?php
declare( strict_types = 1 );
namespace JasonWKeith\Application\Boundary\Persistance;

use JasonWKeith\Application\Boundary\Persistance\Book\BookRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;

interface APIInterface 
{
    public function createPersonRepository(): PersonRepositoryInterface;
}