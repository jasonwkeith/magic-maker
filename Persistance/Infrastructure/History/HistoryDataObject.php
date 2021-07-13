<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;

class HistoryDataObject implements HistoryDataObjectInterface
{
    public function __construct
    (  
        string $created_by,
        DateTimeDataObjectInterface $created_datetime,
        ?string $updated_by,
        ?DateTimeDataObjectInterface $updated_datetime
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
    
    public function getCreatedDatetime(): DateTimeDataObjectInterface
    {
        return $this->created_datetime;
    }
    
    public function getUpdatedDatetime(): ?DateTimeDataObjectInterface
    {
        return $this->updated_datetime;
    }
}