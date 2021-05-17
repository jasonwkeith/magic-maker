<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;

class BookDataTransferObject
{
    public $guid;
    public $history;
    public $authors;
    public $published_year;
    public $subtitle;
    public $title;
}