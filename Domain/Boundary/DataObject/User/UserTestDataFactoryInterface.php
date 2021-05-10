<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

interface UserTestDataFactoryInterface
{
    public function __construct( UserFactoryInterface $user_factory, UserRawTestDataFactoryInterface $user_raw_test_data_factory );
    public function create( int $number ): UserInterface;
    public function createArray( int $number ): array;    
    public function createDefault(): UserInterface;
    public function createCollection( int $number ): UserCollectionInterface;
    public function createRaw( int $number ): UserDataTransferObject;
    public function createRawDefault(): UserDataTransferObject;       
    public function createRawWithApplicationName(): UserDataTransferObject;
    public function createRawWithoutApplicationName(): UserDataTransferObject;   
    public function createRawWithMiddlename(): UserDataTransferObject;
    public function createRawWithoutMiddlename(): UserDataTransferObject;    
    public function createRawWithNickname(): UserDataTransferObject;
    public function createRawWithoutNickname(): UserDataTransferObject;
    public function createRawWithUser(): UserDataTransferObject;    
    public function createRawWithoutUser(): UserDataTransferObject;    
}