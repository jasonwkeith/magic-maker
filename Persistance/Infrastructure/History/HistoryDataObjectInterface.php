<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectInterface;

interface HistoryDataObjectInterface
{
    public function getCreatedBy(): string;
    public function getUpdatedBy(): ?string;
    public function getCreatedDatetime(): DatetimeDataObjectInterface;
    public function getUpdatedDatetime(): ?DatetimeDataObjectInterface;

}