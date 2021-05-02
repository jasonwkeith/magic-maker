<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\User;

use JasonWKeith\Application\Boundary\Persistance\User\UserRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Persistance\Infrastructure\Repository\RepositoryTrait;

class UserRepository implements UserRepositoryInterface
{
    use RepositoryTrait;
    
    public function __construct( UserPersisterInterface $persister, UserMapperInterface $mapper )
    {
        $this->persister = $persister;
        $this->mapper = $mapper;
    } 
    
    public function add(  UserInterface $User ): void
    {
        $data_object = $this->mapper->createDataObject( $User );
        $this->persister->write( $data_object );
    }

    public function get( string $guid ): UserInterface
    {
        $data_object = $this->persister->read( $guid );
        return $this->mapper->createEntity( $data_object );
    }   
    
    public function getCollection( array $guids ): UserCollectionInterface
    {
        $data_objects = $this->persister->readCollection( $guids );        
        return $this->mapper->createEntityCollection( $data_objects );
    }
}