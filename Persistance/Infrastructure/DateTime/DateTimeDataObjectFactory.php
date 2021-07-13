<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\DateTime;

class DateTimeDataObjectFactory implements DateTimeDataObjectFactoryInterface
{
    public function create
    (
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second
    ): DateTimeDataObjectInterface
    {
        return new DateTimeDataObject
        ( 
            $year,
            $month,
            $day,
            $hour,
            $minute,
            $second
        );
    }
}