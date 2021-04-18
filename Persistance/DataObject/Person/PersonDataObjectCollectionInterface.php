<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

interface PersonDataObjectCollectionInterface
{
    public function __construct( PersonDataObjectInterface ...$books );
}