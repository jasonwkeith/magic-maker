<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Datetime;

use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeFactoryInterface;

interface DatetimeMapperInterface
{
    public function __construct( DatetimeFactoryInterface $date_time_factory, DatetimeDataObjectFactoryInterface $date_time_data_object_factory );
    public function createDataObject( DatetimeInterface $date_time ): DatetimeDataObject;
    public function createEntity( int $year, int $month, int $day, int $hour, int $minute, int $second ): DatetimeInterface;
}