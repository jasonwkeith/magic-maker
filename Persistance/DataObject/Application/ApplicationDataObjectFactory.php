<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

class ApplicationDataObjectFactory implements ApplicationDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,
        string $name 
    ): ApplicationDataObjectInterface
    {
        return new ApplicationDataObject
        ( 
            $guid, 
            $history,
            $name 
        );
    }
    
    public function createCollection( ApplicationDataObjectInterface ...$data_objects ): ApplicationDataObjectCollectionInterface
    {
        return new ApplicationDataObjectCollection( ...$data_objects );
    }     
}