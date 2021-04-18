<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

interface PersonCollectionInterface
{
    public function getIterator();
}