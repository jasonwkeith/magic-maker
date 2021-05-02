<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;

interface UserInterface extends GUIDInterface
{
    public const PERSON = "person";
    public const APPLICATION = "application";
    
    public function getApplicationName(): string;
    public function getApplicationGUID(): string;   
    public function getFirstName(): string;
    public function getLastName(): string;    
    public function getMiddleName(): string;      
    public function getNickname(): string;       
    public function getSuffix(): string;      
    public function getPersonGUID(): string;       
}