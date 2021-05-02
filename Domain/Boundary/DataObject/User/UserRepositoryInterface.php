<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

interface UserRepositoryInterface
{
    public function add(  UserInterface $User ): void;
    public function get( string $guid ): UserInterface;
    public function remove( string $guid ): void;    
}