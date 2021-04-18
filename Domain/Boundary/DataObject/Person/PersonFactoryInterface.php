<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

interface PersonFactoryInterface
{
    public function create( string $guid, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd ): PersonInterface;
    public function createCollection( PersonInterface ...$persons ): PersonCollectionInterface;
    public function createDTO(): array;
}