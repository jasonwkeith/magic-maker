<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface ApplicationDataObjectInterface
{
    public function __construct
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,
        string $name 
    );
    public function getGUID(): string;
    public function getHistory(): HistoryDataObjectInterface;
    public function getName(): string;
}