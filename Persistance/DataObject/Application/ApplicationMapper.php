<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface as DomainHistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryInterface;

class ApplicationMapper implements ApplicationMapperInterface
{
    public function __construct( ApplicationFactoryInterface $application_factory, ApplicationDataObjectFactoryInterface $application_data_object_factory, DateTimeMapperInterface $date_time_mapper, HistoryFactoryInterface $history_factory )
    {
        $this->application_factory = $application_factory;
        $this->application_data_object_factory = $application_data_object_factory;
        $this->date_time_mapper = $date_time_mapper;
        $this->history_factory = $history_factory;
    }

    public function createDataObject( ApplicationInterface $application ): ApplicationDataObject
    {
        return $this->application_data_object_factory->create( $application->getGUID(), $application->getCreatedBy(), $application->getUpdatedBy(), $application->getCreatedDate(), $application->getUpdatedDate(), $application->getName() );
    }
    
    public function createEntity( ApplicationDataObjectInterface $data_object ): ApplicationInterface
    {
        $dto = new ApplicationDataTransferObject;
        $dto->guid = $data_object->getGUID();
        $dto->name = $data_object->getName();
        $created_date_time = $this->date_time_mapper->createEntity( $data_object->getCreatedYear(), $data_object->getCreatedMonth(), $data_object->getCreatedDay(), $data_object->getCreatedHour(), $data_object->getCreatedMinute(), $data_object->getCreatedSecond() );
        
        $updated_date_time = null;
        
        if( $data_object->hasUpdatedDateTime() )
        {
            $updated_date_time = $this->date_time_mapper->createEntity( $data_object->getUpdatedYear(), $data_object->getUpdatedMonth(), $data_object->getUpdatedDay(), $data_object->getUpdatedHour(), $data_object->getUpdatedMinute(), $data_object->getUpdatedSecond() );
        }
        $history_dto = new HistoryDataTransferObject;
        $history_dto->created_by = $data_object->getCreatedBy();
        $history_dto->updated_by = $data_object->getUpdatedBy();
        $history_dto->created_date = $created_date_time;
        $history_dto->updated_date = $updated_date_time;
        
        $dto->history = $this->createHistoryEntity( $data_object );
        
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
    
    private function createHistoryEntity( HistoryInterface $data_object ): DomainHistoryInterface
    {
        $created_date_time = $this->date_time_mapper->createEntity( $data_object->getCreatedYear(), $data_object->getCreatedMonth(), $data_object->getCreatedDay(), $data_object->getCreatedHour(), $data_object->getCreatedMinute(), $data_object->getCreatedSecond() );
        $updated_date_time = null;
        if( $data_object->hasUpdatedDateTime() )
        {
            $updated_date_time = $this->date_time_mapper->createEntity( $data_object->getUpdatedYear(), $data_object->getUpdatedMonth(), $data_object->getUpdatedDay(), $data_object->getUpdatedHour(), $data_object->getUpdatedMinute(), $data_object->getUpdatedSecond() );
        }
        $history_dto = new HistoryDataTransferObject;
        $history_dto->created_by = $data_object->getCreatedBy();
        $history_dto->updated_by = $data_object->getUpdatedBy();
        $history_dto->created_date = $created_date_time;
        $history_dto->updated_date = $updated_date_time;
        
        return  $this->history_factory->create( $history_dto );
    }
}