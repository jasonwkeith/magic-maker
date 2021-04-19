<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

interface BookPersisterInterface
{
    public function write( BookDataObjectInterface $data_object ): void;
    public function read( string $guid ): BookDataObjectInterface;
    public function readCollection( array $guids ): BookDataObjectCollectionInterface;    
    public function remove( string $guid ): void;    
}