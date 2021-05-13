<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface ApplicationDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,
        string $name 
    ): ApplicationDataObjectInterface;
    public function createCollection( ApplicationDataObjectInterface ...$data_objects ): ApplicationDataObjectCollectionInterface;    
}