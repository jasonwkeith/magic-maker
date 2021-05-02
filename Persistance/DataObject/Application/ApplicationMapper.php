<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;

class ApplicationMapper implements ApplicationMapperInterface
{
    public function __construct( ApplicationFactoryInterface $application_factory, ApplicationDataObjectFactoryInterface $application_data_object_factory )
    {
        $this->application_factory = $application_factory;
        $this->application_data_object_factory = $application_data_object_factory;
    }

    public function createDataObject( ApplicationInterface $application ): ApplicationDataObject
    {
        return $this->application_data_object_factory->create( $application->getGUID(), $application->getName() );
    }
    
    public function createEntity( ApplicationDataObjectInterface $data_object ): ApplicationInterface
    {
        return $this->application_factory->create( $data_object->getGUID(), $data_object->getName() );
    }
    
    public function createEntityCollection( ApplicationDataObjectCollectionInterface $data_objects ): ApplicationCollectionInterface
    {
        $entities = array();
        foreach( $data_objects as $data_object )
        {
            array_push( $entities, $this->application_factory->create( $data_object->getGUID(), $data_object->getName() ));
        }   
        return $this->application_factory->createCollection( ...$entities );
    }     
}