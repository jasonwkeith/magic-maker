<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface ApplicationDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,
        string $name 
    ): ApplicationDataObjectInterface;
    public function createArchive
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,
        string $name 
    ): ApplicationArchiveInterface;
    public function createArchiveCollection( ApplicationArchiveInterface ...$data_objects): ApplicationArchiveCollectionInterface;    
    public function createCollection( ApplicationDataObjectInterface ...$data_objects ): ApplicationDataObjectCollectionInterface;    
}