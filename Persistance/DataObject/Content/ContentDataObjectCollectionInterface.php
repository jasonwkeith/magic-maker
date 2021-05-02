<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

interface ContentDataObjectCollectionInterface
{
    public function __construct( ?ContentDataObjectInterface ...$contents );
}