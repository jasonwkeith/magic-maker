<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

interface PersonDataObjectInterface
{
    public function __construct( string $guid, HistoryDataObjectInterface $history, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd );
    public function getGUID(): string;   
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getMiddleName(): string;
    public function getNickname(): string;
    public function getSuffix(): string;
    public function hasMD(): bool;
    public function hasPHD(): bool;
}