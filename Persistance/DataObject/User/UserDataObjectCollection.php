<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class UserDataObjectCollection implements UserDataObjectCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( UserDataObjectInterface ...$Users )
    {
        $this->setCollection( $Users );
    }
}