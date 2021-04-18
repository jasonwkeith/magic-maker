<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

interface PersonCollectionFactoryInterface
{
    public function create( PersonInterface ...$Persons ): PersonCollectionInterface;
}