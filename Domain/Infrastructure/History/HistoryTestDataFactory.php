<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class HistoryTestDataFactory implements HistoryTestDataFactoryInterface
{
    public function __construct( HistoryFactoryInterface $history_factory, HistoryRawTestDataFactoryInterface $history_raw_test_data_factory )
    {
        $this->history_factory = $history_factory;
        $this->history_raw_test_data_factory = $history_raw_test_data_factory;
    }

    public function create( int $number ): HistoryInterface
    {
        return $this->history_factory->create( $this->history_raw_test_data_factory->create( $number ) );
    }
    
    public function createArray( int $number ): array
    {
        $raw_counter = $number;
        $users = array();
        
        for( $i = 0; $i < 4; $i++ )
        {
            if( $raw_counter > 9 )
            {
                $raw_counter = 0;
            }
            $users[ $i ] = $this->create( $raw_counter );
        }
        
        return $users;
    }      
    
    public function createDefault(): HistoryInterface
    {
        return $this->history_factory->create( $this->history_raw_test_data_factory->createDefault() );
    }
    
    public function createCollection( int $number ): HistoryCollectionInterface
    {
        return $this->history_factory->createCollection( ...$this->createArray( $number ) );
    }
    
    public function createModified(): HistoryInterface
    {
        return $this->history_factory->create( $this->history_raw_test_data_factory->createModified() );
    }

    public function createRaw( int $number ): HistoryDataTransferObject
    {
        return $this->history_raw_test_data_factory->create( $number );
    }
    
    public function createRawDefault(): HistoryDataTransferObject
    {
        return $this->history_raw_test_data_factory->createDefault();
    }

    public function createUnmodified(): HistoryInterface
    {
        return $this->history_factory->create( $this->history_raw_test_data_factory->createUnmodified() );
    }    
    
}