<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;

class UserMapper implements UserMapperInterface
{
    public function __construct( UserFactoryInterface $user_factory, UserDataObjectFactoryInterface $user_data_object_factory, PersonRepositoryInterface $person_repository, ApplicationRepositoryInterface $application_repository )
    {
        $this->user_factory = $user_factory;
        $this->user_data_object_factory = $user_data_object_factory;
        $this->person_repository = $person_repository;
        $this->application_repository = $application_repository;
    }

    public function createDataObject( UserInterface $user ): UserDataObject
    {
        return $this->user_data_object_factory->create( $user->getGUID(), $user->getPersonGUID(), $user->getApplicationGUID() );
    }
    
    public function createEntity( UserDataObjectInterface $data_object ): UserInterface
    {
        $person = null;
        $application = null;
        
        if( $data_object->getApplicationGUID() )
        {
            $application = $this->application_repository->get( $data_object->getApplicationGUID() );
        }        
        
        if( $data_object->getPersonGUID() )
        {
            $person = $this->person_repository->get( $data_object->getPersonGUID() );
        }

        $data_transfer_object = $this->user_factory->createDataTransferObject();
        $data_transfer_object->guid = $data_object->getGUID();
        $data_transfer_object->person = $person;
        $data_transfer_object->application = $application;
        
        return $this->user_factory->create( $data_transfer_object );
    }
    
    public function createEntityCollection( UserDataObjectCollectionInterface $data_objects ): UserCollectionInterface
    {
        $entities = array();
        foreach( $data_objects as $data_object )
        {
            array_push( $entities, $this->createEntity( $data_object  ));
        }   
        return $this->user_factory->createCollection( ...$entities );
    }   
}