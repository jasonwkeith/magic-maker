<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

class BookDataObjectFactory implements BookDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,   
        array $author_guids, 
        int $published_year, 
        string $subtitle, 
        string $title 
    ): BookDataObjectInterface
    {
        return new BookDataObject
        ( 
            $guid, 
            $history, 
            $author_guids, 
            $published_year, 
            $subtitle, 
            $title 
        );
    }
    
    public function createCollection( BookDataObjectInterface ...$data_objects ): BookDataObjectCollectionInterface
    {
        return new BookDataObjectCollection( ...$data_objects );
    }     
}