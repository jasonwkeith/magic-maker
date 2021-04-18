<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

interface BookCollectionFactoryInterface
{
    public function create( BookInterface ...$books ): BookCollectionInterface;
}