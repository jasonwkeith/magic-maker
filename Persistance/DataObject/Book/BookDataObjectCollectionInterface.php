<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

interface BookDataObjectCollectionInterface
{
    public function __construct( BookDataObjectInterface ...$books );
}