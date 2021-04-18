<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

class PersonPersister implements PersonPersisterInterface
{
    use ExceptionFactoryTrait;
    use FileHandlerTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_Factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, PersonDataObjectFactoryInterface $data_object_factory )
    {
        $this->setExceptionFactory( $exception_Factory );
        $this->writer = $writer;
        $this->reader = $reader;
        $this->data_object_factory = $data_object_factory;
    }
    
    public function write( PersonDataObjectInterface $data_object ): void
    {
        $standard_objects = $this->loadStandardObjects();
        $standard_objects[ $data_object->getGUID() ] = $data_object;

        $this->writer->write( json_encode( $standard_objects ) );
    }
    
    public function read( string $guid ): PersonDataObjectInterface
    {
        $standard_objects = $this->loadStandardObjects();        
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        $standard_object = $standard_objects[ $guid ];
        
        return $this->data_object_factory->create( $standard_object->guid, $standard_object->first_name, $standard_object->middle_name, $standard_object->last_name, $standard_object->nickname, $standard_object->suffix, $standard_object->has_md, $standard_object->has_phd );
    }
    
    public function readCollection( array $guids ): PersonDataObjectCollectionInterface
    {
        $standard_objects = $this->loadStandardObjects();        

        $data_objects = array();
        foreach( $guids as $guid )
        {
            $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
            $standard_object = $standard_objects[ $guid ];            
            array_push( $data_objects,  $this->data_object_factory->create( $standard_object->guid, $standard_object->first_name, $standard_object->middle_name, $standard_object->last_name, $standard_object->nickname, $standard_object->suffix, $standard_object->has_md, $standard_object->has_phd ) );
        }
        
        return $this->data_object_factory->createCollection( ...$data_objects );
    }    
    
    public function remove( string $guid ): void
    {
        $standard_objects = $this->loadStandardObjects();    
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        
        unset( $standard_objects[ $guid ] );
        $this->writer->write( json_encode( $standard_objects ) );    
    }

    private function loadStandardObjects(): array
    {
        return (array) json_decode( $this->reader->read() );
    }
    
    private function throwInvalidGUIDException( bool $exists, string $guid ) :void
    {
        if( ! $exists )
        {
            $message = "Cannot locate saved data for GUID $guid.";
            throw $this->createException( $message );
        }
    }
}