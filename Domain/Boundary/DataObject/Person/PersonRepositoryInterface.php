<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;

interface PersonRepositoryInterface
{
    public function add(  PersonInterface $book ): void;
    public function get( string $guid ): PersonInterface;
    public function remove( string $guid ): void;    
}