<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

interface PersonRawTestDataFactoryInterface
{
    public function __construct( HistoryTestDataFactoryInterface $history_test_data_factory );
    public function create( int $number ): PersonDataTransferObject;
    public function createDefault(): PersonDataTransferObject;  
    public function createRawWithMiddleName(): PersonDataTransferObject;
    public function createRawWithoutMiddleName(): PersonDataTransferObject;
    public function createRawWithNickname(): PersonDataTransferObject;
    public function createRawWithoutNickname(): PersonDataTransferObject;    
}