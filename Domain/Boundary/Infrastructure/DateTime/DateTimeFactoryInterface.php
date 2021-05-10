<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

interface DateTimeFactoryInterface
{
	public function __construct( ExceptionFactoryInterface $exception_factory );
	public function create( DateTimeDataTransferObject $date ): DateTimeInterface;
}

