<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class PersonDataObjectCollection implements PersonDataObjectCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( PersonDataObjectInterface ...$books )
    {
        $this->setCollection( $books );
    }
}