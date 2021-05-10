<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactoryTrait;

class DateTime implements DateTimeInterface
{
    use ExceptionFactoryTrait;
    
    private $created;
    private $created_by;
    private $updated;
    private $updated_by;

    public function __construct( ExceptionFactoryInterface $exception_factory, int $year, int $month, int $day, int $hour, int $minute, int $second )
    {
        $this->setExceptionFactory( $exception_factory );
        $this->setYear( $year );      
        $this->setMonth( $month );   
        $this->setDay( $day );   
        $this->setHour( $hour );   
        $this->setMinute( $minute );   
        $this->setSecond( $second );   
    }
    
    public function getDay(): int
    {
        return $this->day;
    }

    public function getHour(): int
    {
        return $this->hour;
    }
    
    public function getMinute(): int
    {
        return $this->minute;
    }    
    
    public function getMonth(): int
    {
        return $this->month;
    }
    
    public function getSecond(): int
    {
        return $this->second;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    private function setYear( int $year ): void
    {
        $this->year = $year;
    }
    
    private function setMonth( int $month ): void
    {
        if( ! is_null( $month ) )
        {
            if( $month < 1 || $month > 12 )
            {
                $message = "Value passed into Datetime Month Field must be between 1 and 12.  Value passed was $month";
                throw $this->createException( $message );
            }
        }

        $this->month = $month;
    }    
    
    private function setDay( int $day ): void
    {
        if( ! is_null( $day ) )
        {
            if( $day < 1 || $day > 31 )
            {
                $message = "Value passed into Datetime Day Field must be between 1 and 31.  Value passed was $day";
                throw $this->createException( $message );
            }               
        }

        $this->day = $day;
    }   
    
    private function setHour( int $hour ): void
    {
        if( ! is_null( $hour ) )
        {
            if( $hour < 0 || $hour > 23 )
            {
                $message = "Value passed into Datetime Hour Field must be between 0 and 23.  Value passed was $hour";
                throw $this->createException( $message );
            } 
        }
          
        $this->hour = $hour;
    }    
    
    private function setMinute( int $minute ): void
    {
        if( ! is_null( $minute ) )
        {
            if( $minute < 0 || $minute > 59 )
            {
                $message = "Value passed into Datetime Minute Field must be between 0 and 59.  Value passed was $minute";
                throw $this->createException( $message );
            }     
        }
        $this->minute = $minute; 
    }    
    
    private function setSecond( ?int $second ): void
    {
        if( ! is_null( $second ) )
        {
            if( $second < 0 || $second > 59 )
            {
                $message = "Value passed into Datetime Second Field must be between 0 and 59.  Value passed was $second";
                throw $this->createException( $message );
            } 
        }
             
        $this->second = $second;
    }    
}