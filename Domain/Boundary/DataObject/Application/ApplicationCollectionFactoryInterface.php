<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Application;

interface ApplicationCollectionFactoryInterface
{
    public function create( ApplicationInterface ...$aplications ): ApplicationCollectionInterface;
}