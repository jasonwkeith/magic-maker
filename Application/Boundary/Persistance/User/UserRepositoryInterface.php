<?php
declare( strict_types = 1 );
namespace JasonWKeith\Application\Boundary\Persistance\User;

use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;

interface UserRepositoryInterface
{
    public function add( UserInterface $entity ): void;
    public function get( string $guid ): UserInterface;
}