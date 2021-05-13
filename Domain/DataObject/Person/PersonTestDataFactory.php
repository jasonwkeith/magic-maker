<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonRawTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;

class PersonTestDataFactory implements PersonTestDataFactoryInterface
{
    public function __construct( PersonFactoryInterface $person_factory, PersonRawTestDataFactoryInterface $person_raw_test_data_factory )
    {
        $this->person_factory = $person_factory;
        $this->person_raw_test_data_factory = $person_raw_test_data_factory;
    }
    
    public function create( int $number ): PersonInterface
    {
        return $this->person_factory->create( $this->createRaw( $number ) );
    }    
    
    public function createArray( int $number ): array
    {
        $raw_counter = $number;
        $persons = array();
        
        for( $i = 0; $i < 4; $i++ )
        {
            if( $raw_counter > 9 )
            {
                $raw_counter = 0;
            }
            $persons[ $i ] = $this->create( $raw_counter );
        }
        
        return $persons;
    }      

    public function createDefault(): PersonInterface
    {
        return $this->create( $this->createDefault() );
    }
    
    public function createRaw( int $number ): PersonDataTransferObject
    {
        return $this->person_raw_test_data_factory->create( $number );
    }
    
    public function createRawDefault(): PersonDataTransferObject
    {
        return $this->person_raw_test_data_factory->createDefault();
    } 

    public function createPersonArray( int $number ): array
    {
        $raw_counter = $number;
        $persons = array();
        
        for( $i = 0; $i < 4; $i++ )
        {
            if( $raw_counter > 9 )
            {
                $raw_counter = 0;
            }
            $persons[ $i ] = $this->create( $raw_counter );
        }
        
        return $persons;
    }      

    public function createCollection( int $number ): PersonCollectionInterface
    {
        return $this->person_factory->createCollection( ...$this->createArray( $number ) );
    }
    
    public function createRawWithMiddlename(): PersonDataTransferObject
    {
        return $this->person_raw_test_data_factory->createRawWithMiddlename();
    }
    
    public function createRawWithoutMiddlename(): PersonDataTransferObject
    {
        return $this->person_raw_test_data_factory->createRawWithoutMiddlename();
    }
    
    public function createRawWithNickName(): PersonDataTransferObject
    {
        return $this->person_raw_test_data_factory->createRawWithNickname();
    }
    
    public function createRawWithoutNickname(): PersonDataTransferObject
    {
        return $this->person_raw_test_data_factory->createRawWithoutNickname();
    }    
    
    public function createWithMiddlename(): PersonInterface
    {
        return $this->person_factory->create( $this->createRawWithMiddleName() );
    }
    
    public function createWithoutMiddlename(): PersonInterface
    {
        return $this->person_factory->create( $this->createRawWithoutMiddleName() );
    }
    
    public function createWithNickName(): PersonInterface
    {
        return $this->person_factory->create( $this->createRawWithNickname() );
    }
    
    public function createWithoutNickname(): PersonInterface
    {
        return $this->person_factory->create( $this->createRawWithoutNickname() );
    }       
}