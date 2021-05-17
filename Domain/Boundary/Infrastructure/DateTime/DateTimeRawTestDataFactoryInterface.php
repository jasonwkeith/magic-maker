<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\DateTime;

interface  DateTimeRawTestDataFactoryInterface
{
    public function create( int $number ): DateTimeDataTransferObject;
    public function createDefault(): DateTimeDataTransferObject;
}