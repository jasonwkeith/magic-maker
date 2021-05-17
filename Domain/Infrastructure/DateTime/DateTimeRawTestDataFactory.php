<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeRawTestDataFactoryInterface;

class DateTimeRawTestDataFactory implements DateTimeRawTestDataFactoryInterface
{
    public function create( int $number ): DateTimeDataTransferObject
    {
        $dto = new DateTimeDataTransferObject;       
        $dto->year = $this->getYear( $number );
        $dto->month = $this->getMonth( $number );
        $dto->day = $this->getDay( $number );  
        $dto->hour = $this->getHour( $number );
        $dto->minute = $this->getMinute( $number );
        $dto->second = $this->getSecond( $number );  
        
        return $dto;
    }
   
    public function createDefault(): DateTimeDataTransferObject
    {
       return new DateTimeDataTransferObject;
    }   
   
    private function getDay( int $number ): int
    {
        $day = 11 + $number;
        if( $day > 28 )
        {
            $day = $day % 28;
        }
        return $day;
    }    
    
    private function getHour( int $number ): int
    {
        $hour = 2 + $number;
        if( $hour > 23 )
        {
            $hour = $hour % 23;
        }
        return $hour;
    }     
    
    private function getMinute( int $number ): int
    {
        $minute = 20 + $number;
        if( $minute > 59 )
        {
            $minute = $minute % 59;
        }
        return $minute;
    }     
   
    private function getMonth( int $number ): int
    {
        $month = 4 + $number;
        if( $month > 12 )
        {
            $month = $month % 12;
        }
        return $month;
    } 
    
    private function getSecond( int $number ): int
    {
        $second = 35 + $number;
        if( $second > 59 )
        {
            $second = $second % 59;
        }
        return $second;
    }     
   
    private function getYear( int $number ): int
    {
        return 1903 + ( $number * 7 );
    }
   
}