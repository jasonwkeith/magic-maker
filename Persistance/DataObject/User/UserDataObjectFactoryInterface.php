<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

interface UserDataObjectFactoryInterface
{
    public function create( string $guid, string $person_guid, string $application_guid ): UserDataObjectInterface;
    public function createCollection( UserDataObjectInterface ...$data_objects ): UserDataObjectCollectionInterface;    
}