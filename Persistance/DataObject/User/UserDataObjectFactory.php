<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

class UserDataObjectFactory implements UserDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        HistoryDataObjectInterface $history, 
        string $person_guid, 
        string $application_guid 
    ): UserDataObjectInterface
    {
        return new UserDataObject
        ( 
            $guid, 
            $history, 
            $person_guid, 
            $application_guid 
        );
    }
    
    public function createCollection( UserDataObjectInterface ...$data_objects ): UserDataObjectCollectionInterface
    {
        return new UserDataObjectCollection( ...$data_objects );
    }     
}