<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;

class ContentDataTransferObject
{
    public $guid;
    public $history = null;    
    public $text;
}