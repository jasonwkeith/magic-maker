<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

interface UserDataObjectCollectionInterface
{
    public function __construct( UserDataObjectInterface ...$Users );
}