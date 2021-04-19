<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

class BookPersister implements BookPersisterInterface
{
    use ExceptionFactoryTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_Factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, BookDataObjectFactoryInterface $data_object_factory )
    {
        $this->setExceptionFactory( $exception_Factory );
        $this->writer = $writer;
        $this->reader = $reader;
        $this->data_object_factory = $data_object_factory;
    }
    
    public function write( BookDataObjectInterface $data_object ): void
    {
        $standard_objects = $this->loadStandardObjects();
        $standard_objects[ $data_object->getGUID() ] =  $data_object;
        $data = json_encode( $standard_objects, JSON_PRETTY_PRINT );
        $this->writer->write( $data );
    }
    
    public function read( string $guid ): BookDataObjectInterface
    {
        $standard_objects = $this->loadStandardObjects();        
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        $standard_object = $standard_objects[ $guid ];

        return $this->data_object_factory->create( $standard_object['guid'], $standard_object['author_guids'], $standard_object['published_year'], $standard_object['subtitle'], $standard_object['title'] );
    }
    
    
    public function readCollection( array $guids ): BookDataObjectCollectionInterface
    {
        $standard_objects = $this->loadStandardObjects();        

        $data_objects = array();
        foreach( $guids as $guid )
        {
            $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
            $standard_object = $standard_objects[ $guid ];            
            array_push( $data_objects,  $this->data_object_factory->create( $standard_object['guid'], $standard_object['author_guids'], $standard_object['published_year'], $standard_object['subtitle'], $standard_object['title'] ) );
        }
        
        return $this->data_object_factory->createCollection( ...$data_objects );
    }     
    
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

        return json_decode( $data, true );
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