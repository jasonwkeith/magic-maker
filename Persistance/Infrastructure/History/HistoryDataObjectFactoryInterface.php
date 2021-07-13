<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;

interface HistoryDataObjectFactoryInterface
{
    public function create
    (
        string $created_by,
        DateTimeDataObjectInterface $created_datetime,
        ?string $updated_by,
        ?DateTimeDataObjectInterface $updated_datetime
    ): HistoryDataObjectInterface;
}