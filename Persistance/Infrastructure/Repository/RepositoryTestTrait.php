<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Repository;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;

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

    private function getEntities(): array
    {
        $entities[ 0 ] = $this->test_data_factory->create0(); 
        $entities[ 1 ] = $this->test_data_factory->create1();         
        $entities[ 2 ] = $this->test_data_factory->create2();        
        $entities[ 3 ] = $this->test_data_factory->create3();
        $entities[ 4 ] = $this->test_data_factory->create4();
        $entities[ 5 ] = $this->test_data_factory->create5();
        $entities[ 6 ] = $this->test_data_factory->create6();        
        $entities[ 7 ] = $this->test_data_factory->create7();
        $entities[ 8 ] = $this->test_data_factory->create8();
        $entities[ 9 ] = $this->test_data_factory->create9();
        
        return $entities;
    }
    
    protected function tearDown(): void
    {
        $this->system_under_test->add( $this->test_data_factory->create8() );
        $this->system_under_test->add( $this->test_data_factory->create0() );
        $this->system_under_test->add( $this->test_data_factory->create9() ); 
        $this->system_under_test->add( $this->test_data_factory->create7() );
        $this->system_under_test->add( $this->test_data_factory->create1() );
        $this->system_under_test->add( $this->test_data_factory->create2() );  
        $this->system_under_test->add( $this->test_data_factory->create3() );
        $this->system_under_test->add( $this->test_data_factory->create4() );  
        $this->system_under_test->add( $this->test_data_factory->create5() ); 
        $this->system_under_test->add( $this->test_data_factory->create6() );
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