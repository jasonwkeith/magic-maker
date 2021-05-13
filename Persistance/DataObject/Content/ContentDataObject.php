<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryTrait;

class ContentDataObject implements ContentDataObjectInterface
{
    use HistoryTrait;
    
    public function __construct( string $guid, HistoryDataObjectInterface $history, string $text )
    {
        $this->guid = $guid;
        $this->setHistory( $history );        
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