<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeRawTestDataFactoryInterface;

class DateTimeTestDataFactory implements DateTimeTestDataFactoryInterface
{
    public function __construct( DateTimeFactoryInterface $factory, DateTimeRawTestDataFactoryInterface $date_time_raw_test_data_factory )
    {
        $this->factory = $factory;
        $this->raw_factory = $date_time_raw_test_data_factory;
    }
    
    public function create( int $number ): DateTimeInterface
    {
        return $this->createDateTime( $this->createRaw( $number ) );
    }    

    public function createDefault(): DateTimeInterface
    {
        return $this->createDateTime( $this->createDefault() );
    }
    
    public function createRaw( int $number ): DateTimeDataTransferObject
    {
        return $this->raw_factory->create( $number );
    }
    
    public function createRawDefault(): DateTimeDataTransferObject
    {
        return $this->raw_factory->createDefault();
    } 

    public function createArray( int $number ): array
    {
        $raw_counter = $number;
        
        for( $i = 0; $i < 4; $i++ )
        {
            if( $raw_counter > 9 )
            {
                $raw_counter = 0;
            }
            $person[ $i ] = $this->create( $raw_counter );
        }
        
        return $persons;
    }      

    private function createDateTime( DateTimeDataTransferObject $date_time ): DateTimeInterface
    {
        return $this->factory->create( $date_time );
    }
}