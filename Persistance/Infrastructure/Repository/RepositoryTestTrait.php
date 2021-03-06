<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Repository;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Persistance\APIFactory;
use JasonWKeith\Persistance\Infrastructure\TestConstants;

trait RepositoryTestTrait
{
    public function testCallingRemoveDoesNotRemoveWrongEntity(): void
    {
        $entities = $this->getEntities();
        $entity = $entities [ 3 ];
        unset( $entities[ 3 ] );
        
        $this->system_under_test->remove( $entity->getGUID() );
        
        $this->validateRepositoryReturnsEachEntity( $entities );      
    }
    
    public function testCallingRemoveDoesRemoveCorrectEntity(): void
    {
        $entities = $this->getEntities();
        $entity = $entities [ 5 ];

        $this->system_under_test->remove( $entity->getGUID() );

        $this->expectException( ExceptionInterface::class ) ;
        $this->system_under_test->get( $entity->getGUID() ) ;
    }    
    
    public function testCallingGetWithInvalidGUIDThrowsException(): void
    {
        $entities = $this->getEntities();
        $entity = $entities [ 7 ];        
        $this->system_under_test->remove( $entity->getGUID() );

        $this->expectException( ExceptionInterface::class ) ;
        $this->system_under_test->get( $entity->getGUID() ) ;
    }        

    public function testCallingRemoveWithInvalidGUIDThrowsException(): void
    {
        $entities = $this->getEntities();
        $entity = $entities [ 9 ];        
        $this->system_under_test->remove( $entity->getGUID() );

        $this->expectException( ExceptionInterface::class ) ;
        $this->system_under_test->remove( $entity->getGUID() ) ;
    }      
    
    
    public function testRepositoryReturnsCorrectEntityByGUID(): void
    {
        $this->validateRepositoryReturnsEachEntity( $this->getEntities() );
    }
    
    public function testGetCollectionReturnsCorrectEntities(): void
    {
        $indices = array( 1, 3, 5, 9 );
        $all_entities = $this->getEntities();
        $guids = array();
        $entities = array();
        
        foreach( $indices as $index )
        {
            array_push( $entities, $all_entities[ $index ] );
            array_push( $guids,  $all_entities[ $index ]->getGUID() );
        }
        
        $collection = $this->entity_factory->createCollection( ...$entities );
        $this->assertEquals( $collection, $this->system_under_test->getCollection( $guids ) );
    }
    
    public function testGetCollectionWithInvalidGUIDThrowsException(): void
    {
        $indices = array( 1, 3, 5, 9 );
        $all_entities = $this->getEntities();
        $guids = array();

        foreach( $indices as $index )
        {
            array_push( $guids,  $all_entities[ $index ]->getGUID() );
        }
        
        array_push( $guids , "garbage guid" );
        
        $this->expectException( ExceptionInterface::class ) ;
        $this->system_under_test->getCollection( $guids );
    }    

    private function getEntities(): array
    {
        $entities[ 0 ] = $this->test_data_factory->create( 0); 
        $entities[ 1 ] = $this->test_data_factory->create( 1 );         
        $entities[ 2 ] = $this->test_data_factory->create( 2 );        
        $entities[ 3 ] = $this->test_data_factory->create( 3 );
        $entities[ 4 ] = $this->test_data_factory->create( 4 );
        $entities[ 5 ] = $this->test_data_factory->create( 5 );
        $entities[ 6 ] = $this->test_data_factory->create( 6 );        
        $entities[ 7 ] = $this->test_data_factory->create( 7 );
        $entities[ 8 ] = $this->test_data_factory->create( 8 );
        $entities[ 9 ] = $this->test_data_factory->create( 9 );
        
        return $entities;
    }
    
    protected function tearDown(): void
    {
        $this->system_under_test->add( $this->test_data_factory->create( 8 ) );
        $this->system_under_test->add( $this->test_data_factory->create( 0 ) );
        $this->system_under_test->add( $this->test_data_factory->create( 9 ) ); 
        $this->system_under_test->add( $this->test_data_factory->create( 7 ) );
        $this->system_under_test->add( $this->test_data_factory->create( 1 ) );
        $this->system_under_test->add( $this->test_data_factory->create( 2 ) );  
        $this->system_under_test->add( $this->test_data_factory->create( 3 ) );
        $this->system_under_test->add( $this->test_data_factory->create( 4 ) );  
        $this->system_under_test->add( $this->test_data_factory->create( 5 ) ); 
        $this->system_under_test->add( $this->test_data_factory->create( 6 ) );
    }
    
    private function validateRepositoryReturnsEachEntity( array $entities )
    {
        $keys = array_keys( $entities );
        
        foreach( $keys as $key )
        {
            $this->assertEquals( $entities[ $key ], $this->system_under_test->get( $entities[ $key ]->getGUID() ) );
        }
    }  
    
}