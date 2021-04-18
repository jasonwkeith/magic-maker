<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;

interface PersonInterface extends GUIDInterface
{
    public const FIRST_NAME  ="first_name";
    public const LAST_NAME  ="last_name";
    public const MIDDLE_NAME = "middle_name";
    public const NICKNAME ="nickname";
    public const SUFFIX = "suffix";
    public const HAS_MD = "has_md";
    public const HAS_PHD = "has_phd";    

    public function getFirstName(): string;
    public function getLastName(): string;
    public function getMiddleName(): string;
    public function getNickname(): string;
    public function getSuffix(): string;
    public function hasPHD(): bool;
    public function hasMD(): bool;
}