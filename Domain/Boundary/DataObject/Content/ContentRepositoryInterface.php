<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

interface ContentRepositoryInterface
{
    public function add(  ContentInterface $content ): void;
    public function get( string $guid ): ContentInterface;
    public function remove( string $guid ): void;    
}