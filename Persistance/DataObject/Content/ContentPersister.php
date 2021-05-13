<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Datetime\DatetimeDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\Persister\PersisterTrait;

class ContentPersister implements ContentPersisterInterface
{
    use ExceptionFactoryTrait;
    use PersisterTrait;
    
    public function __construct
    ( 
        ExceptionFactoryInterface $exception_Factory, 
        WriterConnectionInterface $writer, 
        ReaderConnectionInterface $reader, 
        DatetimeDataObjectFactoryInterface $Datetime_data_object_factory, 
        HistoryDataObjectFactoryInterface $history_data_object_factory,      
        ContentDataObjectFactoryInterface $data_object_factory 
    )
    {
        $this->setExceptionFactory( $exception_Factory );
        $this->writer = $writer;
        $this->reader = $reader;
        $this->setDatetimeDataObjectFactory( $Datetime_data_object_factory );
        $this->setHistoryDataObjectFactory( $history_data_object_factory );             
        $this->data_object_factory = $data_object_factory;
    }
    
    public function write( ContentDataObjectInterface $data_object ): void
    {
        $this->writeDataObject( $data_object );
    }
    
    public function read( string $guid ): ContentDataObjectInterface
    {
        $standard_object =  $this->readStandardObject( $guid );
        $history_data_object = $this->createHistoryDataObject( $standard_object[ 'history' ] );
        return $this->data_object_factory->create( $standard_object['guid'], $history_data_object, $standard_object['text'] );
    }

    public function readCollection( array $guids ): ContentDataObjectCollectionInterface
    {
        $standard_objects = $this->loadStandardObjects();        

        $data_objects = array();
        foreach( $guids as $guid )
        {
            $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
            $standard_object = $standard_objects[ $guid ];         
            $history_data_object = $this->createHistoryDataObject( $standard_object[ 'history' ] );
            array_push( $data_objects,  $this->data_object_factory->create( $standard_object['guid'], $history_data_object, $standard_object['text'] ) );
        }
        
        return $this->data_object_factory->createCollection( ...$data_objects );
    }   
}