<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\DateTime;

class DateTimeDataObject implements DateTimeDataObjectInterface
{
    public function __construct
    (  
        ?int $year,
        ?int $month,
        ?int $day,
        ?int $hour,
        ?int $minute,
        ?int $second
    )
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
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
    
    public function getTimestamp(): int
    {
        $year = $this->year;
        $month = str_pad( strval( $this->month ), 2, "0" );
        $day = str_pad( strval( $this->day ), 2, "0" );        
        $hour = str_pad( strval( $this->hour ), 2, "0" );
        $minute = str_pad( strval( $this->minute ), 2, "0" );        
        $second = str_pad( strval( $this->second ), 2, "0" );
        
        $datetime = \DateTimeImmutable::createFromFormat( 'Y-m-d H:i:s', "$year-$month-$day $hour:$minute:$second", new \DateTimeZone( "UTC" ) );
        
        return $datetime->getTimestamp();
    }     

    public function getYear(): int
    {
        return $this->year;
    } 
}