<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Persister;

trait PersisterTrait
{
    public function remove( string $guid ): void
    {
        $standard_objects = $this->loadStandardObjects( $this->reader->read() );    
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        
        unset( $standard_objects[ $guid ] );
        $this->writer->write( json_encode( $standard_objects ) );    
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
    
    private function throwInvalidGUIDException( bool $exists, string $guid ) :void
    {
        if( ! $exists )
        {
            $message = "Cannot locate saved data for GUID $guid.";
            throw $this->createException( $message );
        }
    } 
    
    private function readStandardObject( string $guid ): array
    {
        $standard_objects = $this->loadStandardObjects( );        
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        return $standard_objects[ $guid ];
    }

    private function writeDataObject( $data_object ): void
    {
        $standard_objects = $this->loadStandardObjects();
        $standard_objects[ $data_object->getGUID() ] =  $data_object;
        $data = json_encode( $standard_objects, JSON_PRETTY_PRINT );
        $this->writer->write( $data );        
    }    
}
