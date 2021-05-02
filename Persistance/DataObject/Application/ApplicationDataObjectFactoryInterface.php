<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

interface ApplicationDataObjectFactoryInterface
{
    public function create( string $guid, string $name ): ApplicationDataObjectInterface;
    public function createCollection( ApplicationDataObjectInterface ...$data_objects ): ApplicationDataObjectCollectionInterface;    
}