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

    public function getYear(): int
    {
        return $this->year;
    } 
}