<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class ApplicationArchiveCollection implements ApplicationArchiveCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( ApplicationArchiveInterface ...$application_archives )
    {
        $this->setCollection( $applications );
    }
}