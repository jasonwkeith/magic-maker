<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;

class BookDataObject implements BookDataObjectInterface
{
    public function __construct(  string $guid, array $author_guids, int $published_year, string $subtitle, string $title )
    {
        $this->guid = $guid;
        $this->author_guids = $author_guids;
        $this->published_year = $published_year;
        $this->subtitle = $subtitle;
        $this->title = $title;
    }
    
    public function getGUID(): string
    {
        return $this->guid;
    }
    
    public function getAuthorGUIDs(): array
    {
        return $this->author_guids;
    }
    
    public function getPublishedYear(): int
    {
        return $this->published_year;
    }
    
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }
}