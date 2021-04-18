<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

class RawBookDTO
{
    public $guid = "";
    public $authors = array();
    public $published_year = 0;
    public $subtitle ="";
    public $title ="";
}
