<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Application\Boundary\Persistance\User\UserRepositoryInterface;

class UserRepositoryFactory implements UserRepositoryFactoryInterface
{
    public function __construct( UserPersisterInterface $persister, UserMapperInterface $User_mapper )
    {
        $this->persister = $persister;
        $this->User_mapper = $User_mapper;
    }
    
    public function create(): UserRepositoryInterface
    {
        return new UserRepository( $this->persister, $this->User_mapper );
    }
}