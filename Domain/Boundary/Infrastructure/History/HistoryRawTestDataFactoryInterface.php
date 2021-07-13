<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;

interface HistoryRawTestDataFactoryInterface
{
    public function __construct
    ( 
        DateTimeTestDataFactoryInterface $date_time_test_data_factory
    );
    public function create( int $number ): HistoryDataTransferObject;
    public function createDefault(): HistoryDataTransferObject;
    public function createModified(): HistoryDataTransferObject;
    public function createUnmodified(): HistoryDataTransferObject;  
}