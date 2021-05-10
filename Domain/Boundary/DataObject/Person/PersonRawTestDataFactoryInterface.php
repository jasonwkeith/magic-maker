<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

interface PersonRawTestDataFactoryInterface
{
    public function __construct();
    public function create( int $number ): PersonDataTransferObject;
    public function createDefault(): PersonDataTransferObject;  
    public function createRawWithMiddleName(): PersonDataTransferObject;
    public function createRawWithoutMiddleName(): PersonDataTransferObject;
    public function createRawWithNickname(): PersonDataTransferObject;
    public function createRawWithoutNickname(): PersonDataTransferObject;    
}