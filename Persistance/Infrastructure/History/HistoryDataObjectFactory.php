<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectInterface;

class HistoryDataObjectFactory implements HistoryDataObjectFactoryInterface
{
    public function create
    (
        string $created_by,
        DatetimeDataObjectInterface $created_datetime,
        ?string $updated_by,
        ?DatetimeDataObjectInterface $updated_datetime
    ): HistoryDataObjectInterface
    {
        return new HistoryDataObject
        ( 
            $created_by,
            $created_datetime,
            $updated_by,
            $updated_datetime
        );
    }
}