<?php
declare( strict_types = 1 );
namespace JasonWKeith\Application\Boundary\Persistance\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;

interface PersonRepositoryInterface
{
    public function add( PersonInterface $book ): void;
    public function get( string $guid ): PersonInterface;
}