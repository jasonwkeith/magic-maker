<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;

class BookDataTransferObject
{
    public $guid;
    public $authors;
    public $published_year;
    public $subtitle;
    public $title;

    public function duplicate(): BookDataTransferObject
    {
        $duplicate = new BookDataTransferObject;
        $duplicate->guid = $this->guid;
        $duplicate->authors = $this->authors;
        $duplicate->published_year = $this->published_year;
        $duplicate->subtitle = $this->subtitle;
        $duplicate->title = $this->title;
        
        return $duplicate;
    }
}