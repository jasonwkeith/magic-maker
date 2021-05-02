<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

class UserDataObject implements UserDataObjectInterface
{
    public function __construct( string $guid, ?string $person_guid, ?string $application_guid )
    {
        $this->guid = $guid;
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