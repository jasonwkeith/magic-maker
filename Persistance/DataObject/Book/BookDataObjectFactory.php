<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

interface BookDataObjectFactoryInterface
{
    public function create( string $guid, array $author_guids, int $published_year, string $subtitle, string $title ): BookDataObjectInterface;
}