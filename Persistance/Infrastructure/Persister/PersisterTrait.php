<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Persister;

use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

trait PersisterTrait
{
    public function remove( string $guid ): void
    {
        $standard_objects = $this->loadStandardObjects( $this->reader->read() );    
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        
        unset( $standard_objects[ $guid ] );
        $this->writer->write( json_encode( $standard_objects ) );    
    }  

    private function createDatetimeDataObject( array $date_time_array ): DatetimeDataObjectInterface
    {
        return $this->Datetime_data_object_factory->create( $date_time_array[ 'year' ], $date_time_array[ 'month' ], $date_time_array[ 'day' ], $date_time_array[ 'hour' ], $date_time_array[ 'minute' ], $date_time_array[ 'second' ]  );
    }    
    
    private function createHistoryDataObject( array $history_data ): HistoryDataObjectInterface
    {
        $created_date_time = $this->createDatetimeDataObject( $history_data[ 'created_datetime' ] );
        $updated_date_time = null;
        if( isset( $history_data[ 'updated_datetime' ] ) )
        {
            $updated_date_time = $this->createDatetimeDataObject( $history_data[ 'updated_datetime' ] );            
        }
        
        return $this->history_data_object_factory->create( $history_data[ 'created_by' ], $created_date_time, $history_data[ 'updated_by' ], $updated_date_time );
    }    

    private function loadStandardObjects(): array
    {
        $data = $this->reader->read();
        $objects = json_decode( $data, true );
        if( is_null( $objects ) )
        {
            $objects = array();
        }
        return $objects;
    }

    private function readStandardObject( string $guid ): array
    {
        $standard_objects = $this->loadStandardObjects( );        
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        return $standard_objects[ $guid ];
    }
    
    private function setDatetimeDataObjectFactory( DatetimeDataObjectFactoryInterface $Datetime_data_object_factory ): void
    {
        $this->Datetime_data_object_factory = $Datetime_data_object_factory;
    }
    
    private function setHistoryDataObjectFactory( HistoryDataObjectFactoryInterface $history_data_object_factory ): void
    {
        $this->history_data_object_factory = $history_data_object_factory;
    }
    
    private function throwInvalidGUIDException( bool $exists, string $guid ) :void
    {
        if( ! $exists )
        {
            $message = "Cannot locate saved data for GUID $guid.";
            throw $this->createException( $message );
        }
    } 

    private function writeDataObject( $data_object ): void
    {
        $standard_objects = $this->loadStandardObjects();
        $standard_objects[ $data_object->getGUID() ] =  $data_object;
        $data = json_encode( $standard_objects, JSON_PRETTY_PRINT );
        $this->writer->write( $data );        
    }    
}
