<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DatetimeDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;

class DateTimeMapper implements DateTimeMapperInterface
{
    public function __construct( DateTimeFactoryInterface $date_time_factory, DateTimeDataObjectFactoryInterface $date_time_data_object_factory )
    {
        $this->date_time_factory = $date_time_factory;
        $this->date_time_data_object_factory = $date_time_data_object_factory;
    }

    public function createDataObject( DateTimeInterface $date_time ): DateTimeDataObject
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
    
    public function createEntity( ?int $year, ?int $month, ?int $day, ?int $hour, ?int $minute, ?int $second ): DateTimeInterface
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