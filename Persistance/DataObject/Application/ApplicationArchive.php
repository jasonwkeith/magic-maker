<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

class ApplicationArchive
{
    public function __construct
    ( 
        string $archive_activity,
        ApplicationDataObject $application
    )
    {
        $this->archive_activity = $archive_activity;
        $this->application = $application;
    }
    
    public function getArchiveActivity(): string
    {
        return $this->archive_activity;
    }
    
    public function getApplication(): ApplicationDataObject
    {
        return $this->application;
    }    
}