<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\Persister\PersisterTrait;

class BookPersister implements BookPersisterInterface
{
    use ExceptionFactoryTrait;
    use PersisterTrait;
    
    public function __construct
    ( 
        ExceptionFactoryInterface $exception_Factory, 
        WriterConnectionInterface $writer, 
        ReaderConnectionInterface $reader, 
        DateTimeDataObjectFactoryInterface $datetime_data_object_factory, 
        HistoryDataObjectFactoryInterface $history_data_object_factory,  
        BookDataObjectFactoryInterface $data_object_factory 
    )
    {
        $this->setExceptionFactory( $exception_Factory );
        $this->writer = $writer;
        $this->reader = $reader;
        $this->setDateTimeDataObjectFactory( $datetime_data_object_factory );
        $this->setHistoryDataObjectFactory( $history_data_object_factory );        
        $this->data_object_factory = $data_object_factory;
    }
    
    public function write( BookDataObjectInterface $data_object ): void
    {
        $this->writeDataObject( $data_object );
    }
    
    public function read( string $guid ): BookDataObjectInterface
    {
        $standard_object =  $this->readStandardObject( $guid );
        $history_data_object = $this->createHistoryDataObject( $standard_object[ 'history' ] );
        return $this->data_object_factory->create( $standard_object['guid'], $history_data_object, $standard_object['author_guids'], $standard_object['published_year'], $standard_object['subtitle'], $standard_object['title'] );
    }

    public function readCollection( array $guids ): BookDataObjectCollectionInterface
    {
        $standard_objects = $this->loadStandardObjects();        

        $data_objects = array();
        foreach( $guids as $guid )
        {
            $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
            $standard_object = $standard_objects[ $guid ];     
            $history_data_object = $this->createHistoryDataObject( $standard_object[ 'history' ] );
            array_push( $data_objects,  $this->data_object_factory->create( $standard_object['guid'], $history_data_object, $standard_object['author_guids'], $standard_object['published_year'], $standard_object['subtitle'], $standard_object['title'] ) );
        }
        
        return $this->data_object_factory->createCollection( ...$data_objects );
    }     
}