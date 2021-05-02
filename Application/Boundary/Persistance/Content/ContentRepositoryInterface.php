<?php
declare( strict_types = 1 );
namespace JasonWKeith\Application\Boundary\Persistance\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;

interface ContentRepositoryInterface
{
    public function add( ContentInterface $book ): void;
    public function get( string $guid ): ContentInterface;
}