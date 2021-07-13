<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

class ApplicationDataObjectFactory implements ApplicationDataObjectFactoryInterface
{
    public function create
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,
        string $name 
    ): ApplicationDataObjectInterface
    {
        return new ApplicationDataObject
        ( 
            $guid, 
            $history,
            $name 
        );
    }
    
    public function createArchive
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,
        string $name 
    ): ApplicationArchiveInterface
    {
        return new ApplicationArchive
        ( 
            $guid, 
            $history,
            $name,
            $archive_action
        );
    }    

    public function createArchiveCollection( ApplicationArchiveInterface ...$data_objects): ApplicationArchiveCollectionInterface
    {
        return new ApplicationArchiveCollection( ... $data_objects );
    }
    
    public function createCollection( ApplicationDataObjectInterface ...$data_objects ): ApplicationDataObjectCollectionInterface
    {
        return new ApplicationDataObjectCollection( ...$data_objects );
    }     
}