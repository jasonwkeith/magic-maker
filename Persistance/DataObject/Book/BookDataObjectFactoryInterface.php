<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

class BookDataObjectFactory implements BookDataObjectFactoryInterface
{
    public function create( string $guid, array $author_guids, int $published_year, string $subtitle, string $title ): BookDataObjectInterface
    {
        return new BookDataObject( $guid, $author_guids, $published_year, $subtitle, $title );
    }
}