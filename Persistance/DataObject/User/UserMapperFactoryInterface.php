<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;

interface UserMapperFactoryInterface
{
    public function __construct( UserFactoryInterface $entity_factory, UserDataObjectFactoryInterface $data_object_factory, PersonRepositoryInterface $person_repository, ApplicationRepositoryInterface $application_repository );
    public function create(): UserMapperInterface;
}