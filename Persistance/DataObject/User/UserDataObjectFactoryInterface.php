<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface UserDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        HistoryDataObjectInterface $history, 
        string $person_guid, 
        string $application_guid 
    ): UserDataObjectInterface;
    public function createCollection( UserDataObjectInterface ...$data_objects ): UserDataObjectCollectionInterface;    
}