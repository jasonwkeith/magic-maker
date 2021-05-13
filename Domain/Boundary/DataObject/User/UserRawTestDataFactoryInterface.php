<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

interface UserRawTestDataFactoryInterface
{
    public function __construct( HistoryTestDataFactoryInterface $history_test_data_factory, ApplicationTestDataFactoryInterface $application_test_data_factory, PersonTestDataFactoryInterface $person_test_data_factory );
    public function create( int $number ): UserDataTransferObject;
    public function createDefault(): UserDataTransferObject;    
    public function createRawWithApplicationName(): UserDataTransferObject;
    public function createRawWithoutApplicationName(): UserDataTransferObject;   
    public function createRawWithMiddlename(): UserDataTransferObject;
    public function createRawWithoutMiddlename(): UserDataTransferObject;    
    public function createRawWithNickname(): UserDataTransferObject;
    public function createRawWithoutNickname(): UserDataTransferObject;
    public function createRawWithUser(): UserDataTransferObject;    
    public function createRawWithoutUser(): UserDataTransferObject;
}