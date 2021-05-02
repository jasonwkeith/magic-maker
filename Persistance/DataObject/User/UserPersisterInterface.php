<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

interface UserPersisterInterface
{
    public function write( UserDataObjectInterface $data_object ): void;
    public function read( string $guid ): UserDataObjectInterface;
    public function readCollection( array $guids ): UserDataObjectCollectionInterface;    
    public function remove( string $guid ): void;    
}