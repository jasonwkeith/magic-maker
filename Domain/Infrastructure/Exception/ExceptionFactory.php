<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\Exception;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class ExceptionFactory implements ExceptionFactoryInterface
{
	public function create( string $message ): ExceptionInterface
	{
		return new Exception( $message );
	}
}