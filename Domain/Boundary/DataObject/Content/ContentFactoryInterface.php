<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\MarkupTag\MarkupTagInterface;

interface ContentFactoryInterface
{
    public function create( string $guid, string $text ): ContentInterface;
    public function createCollection( ContentInterface ...$contents ): ContentCollectionInterface;
    public function createEmptyCollection(): ContentCollectionInterface;    
    public function createDTO(): array;    
}