<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

interface ContentCollectionFactoryInterface
{
    public function create( ContentInterface ...$books ): ContentCollectionInterface;
}