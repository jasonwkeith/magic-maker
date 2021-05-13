<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface ContentDataObjectFactoryInterface
{
    public function create( string $guid, HistoryDataObjectInterface $history,  string $text ): ContentDataObjectInterface;
    public function createCollection( ContentDataObjectInterface ...$data_objects ): ContentDataObjectCollectionInterface;    
    public function createEmptyCollection(): ContentDataObjectCollectionInterface;        
}