<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\DateTime;

class DateTimeDataTransferObject
{
    public $day = null;
    public $hour = null;   
    public $minute = null;
    public $month = null;
    public $second = null;
    public $year = null;
    
    public function duplicate( DateTimeDataTransferObject $original ): DateTimeDataTransferObject
    {
        $duplicate = new DateTimeDataTransferObject;
        $duplicate->day = $original->created_date->day;
        $duplicate->hour = $original->created_date->hour;
        $duplicate->minute = $original->created_date->minute;
        $duplicate->month = $original->created_date->month;
        $duplicate->second = $original->created_date->second;
        $duplicate->year = $original->created_date->year;
        
        return $duplicate;
    }      
}

