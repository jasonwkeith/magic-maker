<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\Exception;

interface ExceptionFactoryInterface
{
	public function create( string $message ): ExceptionInterface;
}