<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;

interface DateTimeDataObjectInterface extends DateTimeInterface
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