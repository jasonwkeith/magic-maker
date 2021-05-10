<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\DateTime;

interface DateTimeTestDataFactoryInterface
{
    public function __construct( DateTimeFactoryInterface $factory, DateTimeRawTestDataFactoryInterface $date_time_raw_test_data_factory );
    public function create( int $number ): DateTimeInterface;
    public function createDefault(): DateTimeInterface;
    public function createRaw( int $number ): DateTimeDataTransferObject;
    public function createRawDefault(): DateTimeDataTransferObject;
    public function createArray( int $number ): array;
}