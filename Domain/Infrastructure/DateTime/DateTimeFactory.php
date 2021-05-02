<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class DateTimeFactory implements DateTimeFactoryInterface
{
	public function __construct( ExceptionFactoryInterface $exception_factory )
	{
		$this->exception_factory = $exception_factory;
	}
	
	public function create( ?int $year, ?int $month, ?int $day, ?int $hour, ?int $minute, ?int $second  ): DateTimeInterface
	{
        return new DateTime( $this->exception_factory, $year, $month, $day, $hour, $minute, $second );
	}
}

