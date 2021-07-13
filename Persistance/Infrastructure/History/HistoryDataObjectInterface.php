<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;

interface HistoryDataObjectInterface
{
    public function getCreatedBy(): string;
    public function getUpdatedBy(): ?string;
    public function getCreatedDatetime(): DateTimeDataObjectInterface;
    public function getUpdatedDatetime(): ?DateTimeDataObjectInterface;

}