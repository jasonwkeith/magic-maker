<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\GUID;

interface GUIDFactoryInterface
{
	public function create(): string;
}

