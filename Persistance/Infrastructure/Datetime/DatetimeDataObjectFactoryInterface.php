<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Datetime;

interface DatetimeDataObjectFactoryInterface
{
    public function create
    (
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second
    ): DatetimeDataObjectInterface;
}