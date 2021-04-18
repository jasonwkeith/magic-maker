<?php
declare( strict_types = 1 );
namespace JasonWKeith\Application\Boundary\Persistance\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;

interface BookRepositoryInterface
{
    public function add(  BookInterface $book ): void;
    public function get( string $guid ): BookInterface;
}