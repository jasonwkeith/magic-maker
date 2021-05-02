<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

class ApplicationDataObjectFactory implements ApplicationDataObjectFactoryInterface
{
    public function create( string $guid, string $name ): ApplicationDataObjectInterface
    {
        return new ApplicationDataObject( $guid, $name );
    }
    
    public function createCollection( ApplicationDataObjectInterface ...$data_objects ): ApplicationDataObjectCollectionInterface
    {
        return new ApplicationDataObjectCollection( ...$data_objects );
    }     
}