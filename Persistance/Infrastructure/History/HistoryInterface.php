<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

interface HistoryInterface
{
    public function getCreatedBy(): string;
    public function getUpdatedBy(): ?string;
    public function getCreatedYear(): int;
    public function getCreatedMonth(): int;
    public function getCreatedDay(): int;
    public function getCreatedHour(): int;
    public function getCreatedMinute(): int;
    public function getCreatedSecond(): int;
    public function getUpdatedYear(): ?int;
    public function getUpdatedMonth(): ?int;
    public function getUpdatedDay(): ?int;
    public function getUpdatedHour(): ?int;
    public function getUpdatedMinute(): ?int;
    public function getUpdatedSecond(): ?int;  
}