<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;

class HistoryFactory implements HistoryFactoryInterface
{
	public function create( DateTimeInterface $created, string $created_by, ?DateTimeInterface $updated, string $updated_by ): HistoryInterface
	{
        return new History( $created, $created_by, $updated, $updated_by );
	}
}

