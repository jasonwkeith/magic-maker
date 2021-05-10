<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

interface UserFactoryInterface
{
    public function create( UserDataTransferObject $user_data_transfer_object ): UserInterface;
    public function createCollection( UserInterface ...$Userss ): UserCollectionInterface;
    public function createDataTransferObject(): UserDataTransferObject;
    public function createEmptyCollection(): UserCollectionInterface;    
    public function createDTO(): UserDataTransferObject;    
}