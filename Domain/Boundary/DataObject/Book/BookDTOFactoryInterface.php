<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

interface BookDTOFactoryInterface
{
    public function create(): array;
}