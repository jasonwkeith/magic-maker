<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;

class HistoryDataObjectFactory implements HistoryDataObjectFactoryInterface
{
    public function create
    (
        string $created_by,
        DateTimeDataObjectInterface $created_datetime,
        ?string $updated_by,
        ?DateTimeDataObjectInterface $updated_datetime
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