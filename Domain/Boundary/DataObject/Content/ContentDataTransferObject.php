<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;

class ContentDataTransferObject
{
    public $guid;
    public $text;

    public function duplicate(): ContentDataTransferObject
    {
        $duplicate = new ContentDataTransferObject;
        $duplicate->guid = $this->guid;
        $duplicate->text = $this->text;

        return $duplicate;
    }
}