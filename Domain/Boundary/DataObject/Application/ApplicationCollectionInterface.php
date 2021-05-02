<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Application;

interface ApplicationCollectionInterface
{
    public function getIterator();
}