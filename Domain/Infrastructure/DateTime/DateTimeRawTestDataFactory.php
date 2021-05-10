<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeRawTestDataFactoryInterface;

class DateTimeRawTestDataFactory implements DateTimeRawTestDataFactoryInterface
{
    public function __construct()
    {
        $this->data_transfer_objects = array();

        $this->data_transfer_objects[ 0 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 0 ]->year = 1903;
        $this->data_transfer_objects[ 0 ]->month = 9;
        $this->data_transfer_objects[ 0 ]->day = 1;
        $this->data_transfer_objects[ 0 ]->hour = 7;
        $this->data_transfer_objects[ 0 ]->minute = 0;        
        $this->data_transfer_objects[ 0 ]->second = 0;   

        $this->data_transfer_objects[ 1 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 1 ]->year = 1996;
        $this->data_transfer_objects[ 1 ]->month = 5;
        $this->data_transfer_objects[ 1 ]->day = 25;
        $this->data_transfer_objects[ 1 ]->hour = 12;
        $this->data_transfer_objects[ 1 ]->minute = 30;        
        $this->data_transfer_objects[ 1 ]->second = 0;   
     
        $this->data_transfer_objects[ 2 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 2 ]->year = 1997;
        $this->data_transfer_objects[ 2 ]->month = 1;
        $this->data_transfer_objects[ 2 ]->day = 1;
        $this->data_transfer_objects[ 2 ]->hour = 14;
        $this->data_transfer_objects[ 2 ]->minute = 0;        
        $this->data_transfer_objects[ 2 ]->second = 0;      
        
        $this->data_transfer_objects[ 3 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 3 ]->year = 2002;
        $this->data_transfer_objects[ 3 ]->month = 12;
        $this->data_transfer_objects[ 3 ]->day = 31;
        $this->data_transfer_objects[ 3 ]->hour = 0;
        $this->data_transfer_objects[ 3 ]->minute = 0;        
        $this->data_transfer_objects[ 3 ]->second = 0;          
        
        $this->data_transfer_objects[ 4 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 4 ]->year = 2013;
        $this->data_transfer_objects[ 4 ]->month = 11;
        $this->data_transfer_objects[ 4 ]->day = 11;
        $this->data_transfer_objects[ 4 ]->hour = 13;
        $this->data_transfer_objects[ 4 ]->minute = 31;        
        $this->data_transfer_objects[ 4 ]->second = 30;   
     
        $this->data_transfer_objects[ 5 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 5 ]->year = 2017;
        $this->data_transfer_objects[ 5 ]->month = 1;
        $this->data_transfer_objects[ 5 ]->day = 12;
        $this->data_transfer_objects[ 5 ]->hour = 15;
        $this->data_transfer_objects[ 5 ]->minute = 45;        
        $this->data_transfer_objects[ 5 ]->second = 20;   

        $this->data_transfer_objects[ 6 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 6 ]->year = 2014;
        $this->data_transfer_objects[ 6 ]->month = 6;
        $this->data_transfer_objects[ 6 ]->day = 20;
        $this->data_transfer_objects[ 6 ]->hour = 16;
        $this->data_transfer_objects[ 6 ]->minute = 0;        
        $this->data_transfer_objects[ 6 ]->second = 0;   

        $this->data_transfer_objects[ 7 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 7 ]->year = 2021;
        $this->data_transfer_objects[ 7 ]->month = 1;
        $this->data_transfer_objects[ 7 ]->day = 6;
        $this->data_transfer_objects[ 7 ]->hour = 10;
        $this->data_transfer_objects[ 7 ]->minute = 35;        
        $this->data_transfer_objects[ 7 ]->second = 19;   
        
        $this->data_transfer_objects[ 8 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 8 ]->year = 1776;
        $this->data_transfer_objects[ 8 ]->month = 7;
        $this->data_transfer_objects[ 8 ]->day = 4;
        $this->data_transfer_objects[ 8 ]->hour = 12;
        $this->data_transfer_objects[ 8 ]->minute = 0;        
        $this->data_transfer_objects[ 8 ]->second = 0;           

        $this->data_transfer_objects[ 9 ] = new DateTimeDataTransferObject;
        $this->data_transfer_objects[ 9 ]->year = 2000;
        $this->data_transfer_objects[ 9 ]->month = 6;
        $this->data_transfer_objects[ 9 ]->day = 15;
        $this->data_transfer_objects[ 9 ]->hour = 12;
        $this->data_transfer_objects[ 9 ]->minute = 0;        
        $this->data_transfer_objects[ 9 ]->second = 0;      
        
        for( $i = 10; $i<20; $i++ )
        {
            $j = $i - 10;
            
            $this->data_transfer_objects[ $i ] = new DateTimeDataTransferObject;
            $this->data_transfer_objects[ $i ]->year = $this->data_transfer_objects[ $j ]->year + 5;
            $this->data_transfer_objects[ $i ]->month = $this->data_transfer_objects[ $j ]->month + 1;   
            if( $this->data_transfer_objects[ $i ]->month > 12 )
            {
                $this->data_transfer_objects[ $i ]->month = 1;                
            }
            
            $this->data_transfer_objects[ $i ]->day = $this->data_transfer_objects[ $j ]->day + 6;
            if( $this->data_transfer_objects[ $i ]->day >28 )
            {
                $this->data_transfer_objects[ $i ]->day = 3;
            }
            
            $this->data_transfer_objects[ $i ]->hour = $this->data_transfer_objects[ $j ]->hour - 1;
            if( $this->data_transfer_objects[ $i ]->hour < 0 )
            {
                $this->data_transfer_objects[ $i ]->hour = 0;
            }
            
            $this->data_transfer_objects[ $i ]->minute = $this->data_transfer_objects[ $j ]->minute-2;  
            if( $this->data_transfer_objects[ $i ]->minute < 0 )
            {
                $this->data_transfer_objects[ $i ]->minute = 0;
            }
            
            $this->data_transfer_objects[ $i ]->second = $this->data_transfer_objects[ $j ]->second +9;
            if( $this->data_transfer_objects[ $i ]->second > 59 )
            {
                $this->data_transfer_objects[ $i ]->second = 2;
            }
        }
    }

   public function create( int $number ): DateTimeDataTransferObject
   {
       return $this->data_transfer_objects[ $number ];
   }
   
   public function createDefault(): DateTimeDataTransferObject
   {
       return new DateTimeDataTransferObject;
   }   
}