<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

interface DateTimeInterface
{
    public const DAY = "day";
    public const HOUR = "hour";
    public const MINUTE = "minute";
    public const MONTH = "month";
    public const SECOND = "second";
    public const YEAR = "year";
    
    public function getDay(): int;
    public function getHour(): int;
    public function getMinute(): int;
    public function getMonth(): int;
    public function getSecond(): int;
    public function getYear(): int;
}