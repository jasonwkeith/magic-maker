<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class BookDataObjectCollection implements BookDataObjectCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( BookDataObjectInterface ...$books )
    {
        $this->setCollection( $books );
    }
}