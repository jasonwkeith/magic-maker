<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

interface PersonFactoryInterface
{
    public function create( PersonDataTransferObject $person ): PersonInterface;
    public function createCollection( PersonInterface ...$persons ): PersonCollectionInterface;
    public function createDataTransferObject(): PersonDataTransferObject;
    public function createEmptyCollection(): PersonCollectionInterface;    
    public function createDTO(): array;
}