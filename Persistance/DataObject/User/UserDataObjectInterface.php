<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface UserDataObjectInterface
{
    public function __construct
    ( 
        string $guid,         
        HistoryDataObjectInterface $history,   
        ?string $person_guid, 
        ?string $application_guid 
    );
    public function getGUID(): string;
    public function getApplicationGUID(): ?string;
    public function getPersonGUID(): ?string ;
}