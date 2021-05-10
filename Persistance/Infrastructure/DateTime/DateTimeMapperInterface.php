<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;

interface DateTimeMapperInterface
{
    public function __construct( DateTimeFactoryInterface $date_time_factory, DateTimeDataObjectFactoryInterface $date_time_data_object_factory );
    public function createDataObject( DateTimeInterface $date_time ): DateTimeDataObject;
    public function createEntity( int $year, int $month, int $day, int $hour, int $minute, int $second ): DateTimeInterface;
}