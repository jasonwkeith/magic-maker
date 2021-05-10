<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\History;

interface HistoryTestDataFactoryInterface
{
    public function __construct( HistoryFactoryInterface $history_factory, HistoryRawTestDataFactoryInterface $history_raw_test_data_factory );
    public function create( int $number ): HistoryInterface;
    public function createArray( int $number ): array;    
    public function createDefault(): HistoryInterface;
    public function createCollection( int $number ): HistoryCollectionInterface;
    public function createRaw( int $number ): HistoryDataTransferObject;
    public function createRawDefault(): HistoryDataTransferObject;     
}