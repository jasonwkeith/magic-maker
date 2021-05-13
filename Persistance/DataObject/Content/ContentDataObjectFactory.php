<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

class ContentDataObjectFactory implements ContentDataObjectFactoryInterface
{
    public function create( string $guid, HistoryDataObjectInterface $history,  string $text ): ContentDataObjectInterface
    {
        return new ContentDataObject( $guid, $history, $text );
    }
    
    public function createCollection( ContentDataObjectInterface ...$data_objects ): ContentDataObjectCollectionInterface
    {
        return new ContentDataObjectCollection( ...$data_objects );
    }     
    
    public function createEmptyCollection(): ContentDataObjectCollectionInterface
    {
        return new ContentDataObjectCollection( null );
    }
}