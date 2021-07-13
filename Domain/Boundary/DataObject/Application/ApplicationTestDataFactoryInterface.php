<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Application;

interface ApplicationTestDataFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $application_factory,  ApplicationRawTestDataFactoryInterface $application_raw_test_data_factory );
    public function create( int $number ): ApplicationInterface;
    public function createArray( int $number ): array;
    public function createCollection( int $number ): ApplicationCollectionInterface;
    public function createDefault(): ApplicationInterface;
    public function createModified(): ApplicationInterface;
    public function createRaw( int $number ): ApplicationDataTransferObject;
    public function createRawDefault(): ApplicationDataTransferObject;
    public function createUnmodified(): ApplicationInterface;    
}