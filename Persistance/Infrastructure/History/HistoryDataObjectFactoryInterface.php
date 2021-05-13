<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectInterface;

interface HistoryDataObjectFactoryInterface
{
    public function create
    (
        string $created_by,
        DatetimeDataObjectInterface $created_datetime,
        ?string $updated_by,
        ?DatetimeDataObjectInterface $updated_datetime
    ): HistoryDataObjectInterface;
}