<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface BookDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,           
        array $author_guids, 
        int $published_year, 
        string $subtitle, 
        string $title 
    ): BookDataObjectInterface;
    public function createCollection( BookDataObjectInterface ...$data_objects ): BookDataObjectCollectionInterface;    
}