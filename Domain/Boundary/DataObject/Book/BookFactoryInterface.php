<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;

interface BookFactoryInterface
{
    public function create( string $guid, PersonCollectionInterface $authors, int $year, string $title, string $subtitle ): BookInterface;
    public function createCollection( BookInterface ...$books ): BookCollectionInterface;
    public function createDTO(): array;    
}