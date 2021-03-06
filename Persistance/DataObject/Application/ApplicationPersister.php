<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;


use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\Persister\PersisterTrait;


class ApplicationPersister implements ApplicationPersisterInterface
{
    use ExceptionFactoryTrait;
    use PersisterTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_Factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, DateTimeDataObjectFactoryInterface $Datetime_data_object_factory, HistoryDataObjectFactoryInterface $history_data_object_factory, ApplicationDataObjectFactoryInterface $data_object_factory )
    {
        $this->setExceptionFactory( $exception_Factory );
        $this->writer = $writer;
        $this->reader = $reader;
        $this->setDateTimeDataObjectFactory( $Datetime_data_object_factory );
        $this->setHistoryDataObjectFactory( $history_data_object_factory );
        $this->data_object_factory = $data_object_factory;
    }
    
    public function write( ApplicationDataObjectInterface $data_object ): void
    {
        $this->writeDataObject( $data_object );
    }
    
    public function read( string $guid ): ApplicationDataObjectInterface
    {
        $standard_object =  $this->readStandardObject( $guid );

        $history_data_object = $this->createHistoryDataObject( $standard_object[ 'history' ] );

        return $this->data_object_factory->create
        ( 
            $standard_object[ 'guid' ], 
            $history_data_object,
            $standard_object[ 'name' ] 
        );
    }

    public function readCollection( array $guids ): ApplicationDataObjectCollectionInterface
    {
        $standard_objects = $this->loadStandardObjects();        

        $data_objects = array();
        foreach( $guids as $guid )
        {
            $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
            $standard_object = $standard_objects[ $guid ];   
            
            $history_data_object = $this->createHistoryDataObject( $standard_object[ 'history' ] );
            
            array_push( $data_objects,  $this->data_object_factory->create
                ( 
                    $standard_object[ 'guid' ], 
                    $history_data_object,                 
                    $standard_object['name'] 
                ) 
            );
        }
        
        return $this->data_object_factory->createCollection( ...$data_objects );
    }    
}