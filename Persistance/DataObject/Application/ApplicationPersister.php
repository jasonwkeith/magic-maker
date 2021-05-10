<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;


use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\Persister\PersisterTrait;


class ApplicationPersister implements ApplicationPersisterInterface
{
    use ExceptionFactoryTrait;
    use PersisterTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_Factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, DateTimeDataObjectFactoryInterface $date_time_factory, ApplicationDataObjectFactoryInterface $data_object_factory )
    {
        $this->setExceptionFactory( $exception_Factory );
        $this->writer = $writer;
        $this->reader = $reader;
        $this->date_time_factory = $date_time_factory;
        $this->data_object_factory = $data_object_factory;
    }
    
    public function write( ApplicationDataObjectInterface $data_object ): void
    {
        $this->writeDataObject( $data_object );
    }
    
    public function read( string $guid ): ApplicationDataObjectInterface
    {
        $standard_object =  $this->readStandardObject( $guid );
        $created_date_time = $this->createDateTimeDataObject( $standard_object[ 'created_date_time' ] );
        $updated_date_time = null;
        if( isset( $standard_object[ 'updated_date_time' ] ) )
        {
            $updated_date_time = $this->createDateTimeDataObject( $standard_object[ 'updated_date_time' ] );            
        }

            
        return $this->data_object_factory->create
        ( 
            $standard_object[ 'guid' ], 
            $standard_object[ 'created_by' ],
            $standard_object[ 'updated_by' ],    
            $created_date_time,
            $updated_date_time, 
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
            
            $created_date_time = $this->createDateTimeDataObject( $standard_object[ 'created_date_time' ] );
            $updated_date_time = null;
            
            if(  $standard_object[ 'updated_date_time' ] )
            {
                $updated_date_time = $this->createDateTimeDataObject( $standard_object[ 'updated_date_time' ] );                
            }

            array_push( $data_objects,  $this->data_object_factory->create
                ( 
                    $standard_object[ 'guid' ], 
                    $standard_object[ 'created_by' ],
                    $standard_object[ 'updated_by' ],
                    $created_date_time,
                    $updated_date_time,                    
                    $standard_object['name'] 
                ) 
            );
        }
        
        return $this->data_object_factory->createCollection( ...$data_objects );
    }    
    
    private function createDateTimeDataObject( array $date_time_array ): DateTimeDataObjectInterface
    {
        return $this->date_time_factory->create( $date_time_array[ 'year' ], $date_time_array[ 'month' ], $date_time_array[ 'day' ], $date_time_array[ 'hour' ], $date_time_array[ 'minute' ], $date_time_array[ 'second' ]  );
    }
}