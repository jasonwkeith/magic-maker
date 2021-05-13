<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Datetime;

use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeInterface;

interface DatetimeDataObjectInterface extends DatetimeInterface
{
    public function __construct
    (  
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second
    );
}