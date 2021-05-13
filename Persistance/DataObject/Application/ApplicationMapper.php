<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

class ApplicationMapper implements ApplicationMapperInterface
{
    public function __construct( ApplicationFactoryInterface $application_factory, ApplicationDataObjectFactoryInterface $application_data_object_factory, HistoryMapperInterface $history_mapper )
    {
        $this->application_factory = $application_factory;
        $this->application_data_object_factory = $application_data_object_factory;
        $this->history_mapper = $history_mapper;
    }

    public function createDataObject( ApplicationInterface $application ): ApplicationDataObject
    {
        $history = $this->history_mapper->createDataObject( $application->getCreatedBy(), $application->getCreatedDate(), $application->getUpdatedBy(), $application->getUpdatedDate() );
        return $this->application_data_object_factory->create( $application->getGUID(), $history, $application->getName() );
    }
    
    public function createEntity( ApplicationDataObjectInterface $data_object ): ApplicationInterface
    {
        $dto = new ApplicationDataTransferObject;
        $dto->guid = $data_object->getGUID();
        $dto->name = $data_object->getName();
        $dto->history = $this->history_mapper->createEntity( $data_object->getHistory() );
        
        return $this->application_factory->create( $dto );
    }
    
    public function createEntityCollection( ApplicationDataObjectCollectionInterface $data_objects ): ApplicationCollectionInterface
    {
        $entities = array();
        foreach( $data_objects as $data_object )
        {
            array_push( $entities, $this->createEntity( $data_object ));
        }   
        return $this->application_factory->createCollection( ...$entities );
    }     
}