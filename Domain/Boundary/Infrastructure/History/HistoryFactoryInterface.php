<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;

interface HistoryFactoryInterface
{
	public function create( DateTimeInterface $created, string $created_by, ?DateTimeInterface $updated, string $updated_by ): HistoryInterface;
}

