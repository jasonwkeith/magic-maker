<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Archiver;

use JasonWKeith\Persistance\Infrastructure\Persister\PersisterTrait;

trait ArchiverTrait
{
    use PersisterTrait;
    
    private function buildHistoryObject( string $history_action, $data_object ): array
    {
        $history_object = array();
        $history_object[ "history_action" ] = $history_action;
        $history_object[ "guid" ] = $data_object->getGUID();
        $history_object[ "data_object" ] = $data_object;
        
        return $history_object;
    }
    
    private function createDataObject( array $standard_object )
    {
        $key = array_keys( $standard_object );
        $history_data_object = $this->createHistoryDataObject( $standard_object[ $key[ 0 ] ][ 'data_object' ][ 'history' ] );
        
        return $this->data_object_factory->create
                ( 
                    $standard_object[ 'guid' ], 
                    $history_data_object,
                    $standard_object[ 'name' ] 
                );        
    }
    
    private function createDataObjectCollection( array $standard_objects )
    {
        $data_objects = array();
        $keys = array_keys( $standard_objects );
        foreach( $keys as $key )
        {
            $data_objects[ $key ] = $this->createDataObject/( $standard_objects[ $key ] );
        }
        return $this->data_object_factory->createCollection( ...$data_objects );
    }    
    
    private function getDataObjectHistoryAction( $history ): string
    {
        if( $history->getUpdatedDatetime() )
        {
            return "updated";
        }
        
        return  "created"; 
    }      
    
    private function getDataObjectHistoryDateValue( $history ): int
    {
        if( $history->getUpdatedDatetime() )
        {
            return $history->getUpdatedDatetime()->getTimestamp();
        }

        return  $history->getCreatedDatetime()->getTimestamp();
    }    
    
    private function loadStandardObjects( string $guid ): array
    {
        $data = $this->archive_reader->read( $guid );
        $objects = json_decode( $data, true );
        if( is_null( $objects ) )
        {
            $objects = array();
        }
        return $objects;
    }    
    
    private function readStandardObjects( string $guid ): array
    {
        $standard_objects = $this->loadStandardObjects( $guid );        
        $this->throwInvalidGUIDException( isset( $standard_objects ), $guid );
        return $standard_objects;
    }    
    
    private function writeHistory( string $history_action, $data_object ): void
    {
        $date_value = $this->getDataObjectHistoryDateValue( $data_object->getHistory() );
        $history_object = $this->buildHistoryObject( $history_action, $data_object );
        
        $standard_objects = $this->loadStandardObjects( $data_object->getGUID() );
        $standard_objects[ $date_value ] =  $history_object;
        ksort( $standard_objects );
        
        $data = json_encode( $standard_objects, JSON_PRETTY_PRINT );
        $this->archive_writer->write( $data_object->getGUID(), $data );           
    }
}