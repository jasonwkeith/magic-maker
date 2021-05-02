<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

interface ContentDTOFactoryInterface
{
    public function create(): array;
}