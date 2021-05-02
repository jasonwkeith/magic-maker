<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;

interface UserMapperInterface
{
    public function __construct( UserFactoryInterface $User_factory, UserDataObjectFactoryInterface $User_data_object_factory, PersonRepositoryInterface $person_repository, ApplicationRepositoryInterface $application_repository );
    public function createDataObject( UserInterface $User ): UserDataObject;
    public function createEntity( UserDataObjectInterface $data_object ): UserInterface;
    public function createEntityCollection( UserDataObjectCollectionInterface $data_objects ): UserCollectionInterface;    
}