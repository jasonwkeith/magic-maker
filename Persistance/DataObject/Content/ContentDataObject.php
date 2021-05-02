<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

class ContentDataObject implements ContentDataObjectInterface
{
    public function __construct( string $guid, string $text )
    {
        $this->guid = $guid;
        $this->text = $text;
    }
    
    public function getGUID(): string
    {
        return $this->guid;
    }

    public function getText(): string
    {
        return $this->text;
    }
}