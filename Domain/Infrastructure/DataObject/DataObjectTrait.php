<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DataObject;

use JasonWKeith\Domain\Infrastructure\GUID\GUIDTrait;
use JasonWKeith\Domain\Infrastructure\History\HistoryTrait;

trait DataObjectTrait
{
    use GUIDTrait;
    use HistoryTrait;
}