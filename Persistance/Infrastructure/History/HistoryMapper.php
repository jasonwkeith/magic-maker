<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;

class HistoryMapper implements HistoryMapperInterface
{
    public function __construct( HistoryFactoryInterface $history_factory, HistoryDataObjectFactoryInterface $history_data_object_factory, DateTimeMapperInterface $Datetime_mapper )
    {
        $this->history_factory = $history_factory;
        $this->history_data_object_factory = $history_data_object_factory;
        $this->Datetime_mapper = $Datetime_mapper;
    }
    
    public function createDataObject( string $created_by, DateTimeInterface $created_date, ?string $updated_by, ?DateTimeInterface $updated_date ): HistoryDataObject
    {
        $updated_date_object = null;
        if( $updated_date )
        {
            $updated_date_object = $this->Datetime_mapper->createDataObject( $updated_date );
        }
        return $this->history_data_object_factory->create
        (
            $created_by,
            $this->Datetime_mapper->createDataObject( $created_date ),
            $updated_by,
            $updated_date_object
        );
    }    
    
    public function createEntity( HistoryDataObjectInterface $data_object ): HistoryInterface
    {
        $history_dto = $this->history_factory->createDataTransferObject();
        $history_dto->created_by = $data_object->getCreatedBy();
        $history_dto->updated_by = $data_object->getUpdatedBy();
        $history_dto->created_date = $this->createDatetimeEntity( $data_object->getCreatedDatetime() );
        $history_dto->updated_date = $this->createDatetimeEntity( $data_object->getUpdatedDatetime() );
        
        return  $this->history_factory->create( $history_dto );
    }
    
    private function createDatetimeEntity( ?DateTimeDataObjectInterface $Datetime_data_object ): ?DateTimeInterface
    {
        if( is_null( $Datetime_data_object ) )
        {
            return null;
        }
        
        return $this->Datetime_mapper->createEntity( $Datetime_data_object->getYear(), $Datetime_data_object->getMonth(), $Datetime_data_object->getDay(), $Datetime_data_object->getHour(), $Datetime_data_object->getMinute(), $Datetime_data_object->getSecond() );
    }
}