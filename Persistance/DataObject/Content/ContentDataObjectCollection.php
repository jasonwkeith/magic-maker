<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class ContentDataObjectCollection implements ContentDataObjectCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( ?ContentDataObjectInterface ...$contents )
    {
        $this->setCollection( $contents );
    }
}