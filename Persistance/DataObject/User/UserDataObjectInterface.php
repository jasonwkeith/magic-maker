<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

interface UserDataObjectInterface
{
    public function __construct( string $guid, ?string $person_guid, ?string $application_guid );
    public function getGUID(): string;
    public function getApplicationGUID(): ?string;
    public function getPersonGUID(): ?string ;
}