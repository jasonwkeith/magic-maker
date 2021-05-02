<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;

interface UserFactoryInterface
{
    public function create( string $guid, ?PersonInterface $person, ?ApplicationInterface $application ): UserInterface;
    public function createCollection( UserInterface ...$Userss ): UserCollectionInterface;
    public function createEmptyCollection(): UserCollectionInterface;    
    public function createDTO(): array;    
}