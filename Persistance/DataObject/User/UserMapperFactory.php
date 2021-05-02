<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;

class UserMapperFactory implements UserMapperFactoryInterface
{
    public function __construct( UserFactoryInterface $entity_factory, UserDataObjectFactoryInterface $data_object_factory, PersonRepositoryInterface $person_repository, ApplicationRepositoryInterface $application_repository )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
        $this->person_repository = $person_repository;
        $this->application_repository = $application_repository;
    }

    public function create(): UserMapperInterface
    {
        return new UserMapper( $this->entity_factory, $this->data_object_factory, $this->person_repository, $this->application_repository );
    }
}