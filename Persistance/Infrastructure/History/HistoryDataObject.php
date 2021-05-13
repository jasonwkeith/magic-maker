<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectInterface;

class HistoryDataObject implements HistoryDataObjectInterface
{
    public function __construct
    (  
        string $created_by,
        DatetimeDataObjectInterface $created_datetime,
        ?string $updated_by,
        ?DatetimeDataObjectInterface $updated_datetime
    )
    {
        $this->created_by = $created_by;
        $this->created_datetime = $created_datetime;
        $this->updated_by = $updated_by;
        $this->updated_datetime = $updated_datetime;
    }
    
    public function getCreatedBy(): string
    {
        return $this->created_by;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updated_by;
    }
    
    public function getCreatedDatetime(): DatetimeDataObjectInterface
    {
        return $this->created_datetime;
    }
    
    public function getUpdatedDatetime(): ?DatetimeDataObjectInterface
    {
        return $this->updated_datetime;
    }
}