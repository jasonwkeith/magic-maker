<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryInterface as PersistanceHistoryInterface;

interface ApplicationDataObjectInterface extends PersistanceHistoryInterface
{
    public function __construct
    ( 
        string $guid, 
        string $created_by,
        ?string $updated_by,
        DateTimeInterface $created_date_time, 
        ?DateTimeInterface $updated_date_time, 
        string $name 
    );
    public function getGUID(): string;
    public function getName(): string;
}