<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Datetime;

use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeFactoryInterface;

class DatetimeMapper implements DatetimeMapperInterface
{
    public function __construct( DatetimeFactoryInterface $date_time_factory, DatetimeDataObjectFactoryInterface $date_time_data_object_factory )
    {
        $this->date_time_factory = $date_time_factory;
        $this->date_time_data_object_factory = $date_time_data_object_factory;
    }

    public function createDataObject( DatetimeInterface $date_time ): DatetimeDataObject
    {
        return $this->date_time_data_object_factory->create
        (
            $date_time->getYear(),
            $date_time->getMonth(),
            $date_time->getDay(),
            $date_time->getHour(),
            $date_time->getMinute(),
            $date_time->getSecond()
        );
    }
    
    public function createEntity( ?int $year, ?int $month, ?int $day, ?int $hour, ?int $minute, ?int $second ): DatetimeInterface
    {
        $dto = new DatetimeDataTransferObject;
        $dto->year = $year;
        $dto->month = $month;
        $dto->day = $day;
        $dto->hour = $hour;
        $dto->minute = $minute;
        $dto->second = $second;
        
        return $this->date_time_factory->create( $dto );
    }

}