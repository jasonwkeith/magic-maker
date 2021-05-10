<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;

class ApplicationDataObjectFactory implements ApplicationDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        string $created_by,
        ?string $updated_by,
        DateTimeInterface $created_date_time, 
        ?DateTimeInterface $updated_date_time, 
        string $name 
    ): ApplicationDataObjectInterface
    {
        return new ApplicationDataObject
        ( 
            $guid, 
            $created_by,
            $updated_by,
            $created_date_time,
            $updated_date_time,
            $name 
        );
    }
    
    public function createCollection( ApplicationDataObjectInterface ...$data_objects ): ApplicationDataObjectCollectionInterface
    {
        return new ApplicationDataObjectCollection( ...$data_objects );
    }     
}