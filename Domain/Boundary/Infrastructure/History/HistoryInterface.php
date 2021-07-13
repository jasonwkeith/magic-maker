<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;

interface HistoryInterface 
{
    public const CREATED_DATE = "created_date";
    public const CREATED_BY = "created_by";
    public const UPDATED_DATE = "updated_date";
    public const UPDATED_BY = "updated_by";
    
    public function __construct( DateTimeInterface $created, string $created_by, ?DateTimeInterface $updated, ?string $updated_by );
    public function getCreatedDate(): DateTimeInterface;
    public function getCreatedBy(): string;
    public function getUpdatedDate(): ?DateTimeInterface;
    public function getUpdatedBy(): ?string;
}