<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Application\Boundary\Persistance\User\UserRepositoryInterface;

interface UserRepositoryFactoryInterface
{
    public function __construct( UserPersisterInterface $persister, UserMapperInterface $User_mapper );
    public function create(): UserRepositoryInterface;
}