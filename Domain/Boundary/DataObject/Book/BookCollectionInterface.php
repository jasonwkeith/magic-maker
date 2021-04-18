<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

interface BookCollectionInterface
{
    public function getIterator();
}