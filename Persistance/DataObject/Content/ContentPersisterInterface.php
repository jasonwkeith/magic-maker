<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

interface ContentPersisterInterface
{
    public function write( ContentDataObjectInterface $data_object ): void;
    public function read( string $guid ): ContentDataObjectInterface;
    public function readCollection( array $guids ): ContentDataObjectCollectionInterface;    
    public function remove( string $guid ): void;    
}