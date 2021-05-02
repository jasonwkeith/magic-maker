<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class ApplicationDataObjectCollection implements ApplicationDataObjectCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( ApplicationDataObjectInterface ...$Applications )
    {
        $this->setCollection( $Applications );
    }
}