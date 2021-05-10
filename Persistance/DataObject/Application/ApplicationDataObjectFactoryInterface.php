<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;

interface ApplicationDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        string $created_by,
        ?string $updated_by,
        DateTimeInterface $created_date_time, 
        ?DateTimeInterface $updated_date_time, 
        string $name 
    ): ApplicationDataObjectInterface;
    public function createCollection( ApplicationDataObjectInterface ...$data_objects ): ApplicationDataObjectCollectionInterface;    
}