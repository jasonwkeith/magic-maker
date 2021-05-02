<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

interface ApplicationPersisterInterface
{
    public function write( ApplicationDataObjectInterface $data_object ): void;
    public function read( string $guid ): ApplicationDataObjectInterface;
    public function readCollection( array $guids ): ApplicationDataObjectCollectionInterface;    
    public function remove( string $guid ): void;    
}