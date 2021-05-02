<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

interface ApplicationDataObjectCollectionInterface
{
    public function __construct( ApplicationDataObjectInterface ...$Applications );
}