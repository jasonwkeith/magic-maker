<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

interface UserCollectionFactoryInterface
{
    public function create( UserInterface ...$aplications ): UserCollectionInterface;
}