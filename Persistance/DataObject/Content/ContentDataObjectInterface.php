<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface ContentDataObjectInterface
{
    public function __construct( string $guid, HistoryDataObjectInterface $history, string $text );
    public function getGUID(): string;
    public function getText(): string;
}