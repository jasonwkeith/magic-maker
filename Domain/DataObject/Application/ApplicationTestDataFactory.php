<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class ApplicationTestDataFactory implements ApplicationTestDataFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $application_factory, ApplicationRawTestDataFactoryInterface $application_raw_test_data_factory )
    {
        $this->application_factory = $application_factory;
        $this->application_raw_test_data_factory = $application_raw_test_data_factory;
    }

    public function create( int $number ): ApplicationInterface
    {
        return $this->application_factory->create( $this->application_raw_test_data_factory->create( $number ) );
    }
    
    public function createArray( int $number ): array
    {
        $raw_counter = $number;
        $applications = array();
        
        for( $i = 0; $i < 4; $i++ )
        {
            if( $raw_counter > 9 )
            {
                $raw_counter = 0;
            }
            $applications[ $i ] = $this->create( $raw_counter );
        }
        
        return $applications;
    }     
    
    public function createCollection( int $number ): ApplicationCollectionInterface
    {
        return $this->application_factory->createCollection( ...$this->createArray( $number ) );
    }    
    
    public function createDefault(): ApplicationInterface
    {
        return $this->application_factory->create( $this->application_raw_test_data_factory->createDefault() );
    }
    
    public function createRaw( int $number ): ApplicationDataTransferObject
    {
        return $this->application_raw_test_data_factory->create( $number );
    }    
    
    public function createRawDefault(): ApplicationDataTransferObject
    {
        return $this->application_raw_test_data_factory->createDefault();
    }   
}