<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

interface UserDTOFactoryInterface
{
    public function create(): array;
}