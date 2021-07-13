<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

interface PersonTestDataFactoryInterface
{
    public function __construct( PersonFactoryInterface $person_factory, PersonRawTestDataFactoryInterface $person_raw_test_data_factory );
    public function create( int $number ): PersonInterface;
    public function createDefault(): PersonInterface;
    public function createRaw( int $number ): PersonDataTransferObject;
    public function createRawDefault(): PersonDataTransferObject;
    public function createCollection( int $number ): PersonCollectionInterface;
    public function createRawWithMiddlename(): PersonDataTransferObject;
    public function createRawWithoutMiddlename(): PersonDataTransferObject;  
    public function createRawWithNickname(): PersonDataTransferObject;
    public function createRawWithoutNickname(): PersonDataTransferObject;     
    public function createWithMiddlename(): PersonInterface;
    public function createWithoutMiddlename(): PersonInterface;
    public function createWithNickname(): PersonInterface;
    public function createWithoutNickname(): PersonInterface; 
}