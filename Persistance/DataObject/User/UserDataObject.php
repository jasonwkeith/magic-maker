<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryTrait;

class UserDataObject implements UserDataObjectInterface
{
    use HistoryTrait;
    
    public function __construct
    ( 
        string $guid,         
        HistoryDataObjectInterface $history,   
        ?string $person_guid, 
        ?string $application_guid 
    )
    {
        $this->guid = $guid;
        $this->setHistory( $history );
        $this->person_guid = $person_guid;
        $this->application_guid = $application_guid;
    }
    
    public function getGUID(): string
    {
        return $this->guid;
    }
    
    public function getApplicationGUID(): ?string
    {
        return $this->application_guid;
    }
    
    public function getPersonGUID(): ?string
    {
        return $this->person_guid;
    }    
}