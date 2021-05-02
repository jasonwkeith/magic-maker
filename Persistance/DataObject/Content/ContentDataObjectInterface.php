<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Persistance\DataObject\MarkupTag\MarkupTagDataObjectInterface;

interface ContentDataObjectInterface
{
    public function __construct( string $guid, string $text );
    public function getGUID(): string;
    public function getText(): string;
}