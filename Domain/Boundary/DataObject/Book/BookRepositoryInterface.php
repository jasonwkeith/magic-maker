<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

interface BookRepositoryInterface
{
    public function add(  BookInterface $book ): void;
    public function get( string $guid ): BookInterface;
    public function remove( string $guid ): void;    
}