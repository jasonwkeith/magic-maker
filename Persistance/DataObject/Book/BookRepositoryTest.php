<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\APIFactory as DomainAPIFactory;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Persistance\APIFactory;
use JasonWKeith\Persistance\Infrastructure\TestConstants;

class BookRepositoryTest extends TestCase
{
    use TestDataAPIHelperTrait;
    
    public function testCallingRemoveDoesNotRemoveWrongEntity(): void
    {
        $entity1 = $this->test_data_factory->create1();
        $entity2 = $this->test_data_factory->create2();
        $entity3 = $this->test_data_factory->create3();
        $entity4 = $this->test_data_factory->create4();       
        $entity5 = $this->test_data_factory->create5();           
        
        $this->system_under_test->add( $entity1 );
        $this->system_under_test->add( $entity2 );
        $this->system_under_test->add( $entity3 );      
        $this->system_under_test->add( $entity4 );  
        $this->system_under_test->add( $entity5 );   
        
        $this->system_under_test->remove( $entity3->getGUID() );
        
        $this->assertEquals( $entity1, $this->system_under_test->get( $entity1->getGUID() ) );
        $this->assertEquals( $entity2, $this->system_under_test->get( $entity2->getGUID() ) );
        $this->assertEquals( $entity4, $this->system_under_test->get( $entity4->getGUID() ) );
        $this->assertEquals( $entity5, $this->system_under_test->get( $entity5->getGUID() ) );  
        
        $this->expectException( ExceptionInterface::class ) ;
        $this->system_under_test->get( $entity3->getGUID() ) ;

    }
    
    public function testCallingRemoveDoesRemoveCorrectEntity(): void
    {
        $entity1 = $this->test_data_factory->create1();
        $entity2 = $this->test_data_factory->create2();
        $entity3 = $this->test_data_factory->create3();
        $entity4 = $this->test_data_factory->create4();       
        $entity5 = $this->test_data_factory->create5();           
        
        $this->system_under_test->add( $entity1 );
        $this->system_under_test->add( $entity2 );
        $this->system_under_test->add( $entity3 );      
        $this->system_under_test->add( $entity4 );  
        $this->system_under_test->add( $entity5 );   
        
        $this->system_under_test->remove( $entity3->getGUID() );

        $this->expectException( ExceptionInterface::class ) ;
        $this->system_under_test->get( $entity3->getGUID() ) ;
    }    
    
    public function testCallingGetWithInvalidGUIDThrowsException(): void
    {
        $entity1 = $this->test_data_factory->create1();
        $entity2 = $this->test_data_factory->create2();
        $entity3 = $this->test_data_factory->create3();
        $entity9 = $this->test_data_factory->create9();           
        
        $this->system_under_test->add( $entity1 );
        $this->system_under_test->add( $entity2 );
        $this->system_under_test->add( $entity3 );      
        $this->system_under_test->add( $entity9 );            
        $this->system_under_test->remove( $entity9->getGUID() );

        $this->expectException( ExceptionInterface::class ) ;
        $this->system_under_test->get( $entity9->getGUID() ) ;
    }        
    
    public function testRepositoryDoesNotRemoveWrongEntityByGUID(): void
    {
        $entity1 = $this->test_data_factory->create1();
        $entity2 = $this->test_data_factory->create2();
        $entity3 = $this->test_data_factory->create3();
        $entity4 = $this->test_data_factory->create4();       
        $entity5 = $this->test_data_factory->create5();           
        
        $this->system_under_test->add( $entity1 );
        $this->system_under_test->add( $entity2 );
        $this->system_under_test->add( $entity3 );      
        $this->system_under_test->add( $entity4 );  
        $this->system_under_test->add( $entity5 );          
        
        $this->assertEquals( $entity1, $this->system_under_test->get( $entity1->getGUID() ) );
        $this->assertEquals( $entity3, $this->system_under_test->get( $entity3->getGUID() ) );
        $this->assertEquals( $entity2, $this->system_under_test->get( $entity2->getGUID() ) );  
    }    
    
    public function testCallingRemoveWithInvalidGUIDThrowsException(): void
    {
        $entity1 = $this->test_data_factory->create1();
        $entity2 = $this->test_data_factory->create2();
        $entity3 = $this->test_data_factory->create3();
        $entity9 = $this->test_data_factory->create9();           
        
        $this->system_under_test->add( $entity1 );
        $this->system_under_test->add( $entity2 );
        $this->system_under_test->add( $entity3 );      
        $this->system_under_test->add( $entity9 ); 
        $this->system_under_test->get( $entity9->getGUID() );
        $this->system_under_test->remove( $entity9->getGUID() ) ;        

        $this->expectException( ExceptionInterface::class ) ;
        $this->system_under_test->remove( $entity9->getGUID() ) ;
    }      
    
    
    public function testRepositoryReturnsCorrectEntityByGUID(): void
    {
        $entity1 = $this->test_data_factory->create1();
        $entity2 = $this->test_data_factory->create2();
        $entity3 = $this->test_data_factory->create3();
        
        $this->system_under_test->add( $entity1 );
        $this->system_under_test->add( $entity2 );
        $this->system_under_test->add( $entity3 );      
        
        $this->assertEquals( $entity1, $this->system_under_test->get( $entity1->getGUID() ) );
        $this->assertEquals( $entity3, $this->system_under_test->get( $entity3->getGUID() ) );
        $this->assertEquals( $entity2, $this->system_under_test->get( $entity2->getGUID() ) );        
    }
    
    public function testTearDown(): void
    {
        $this->assertEquals( true, true );
    }
    
    protected function setUp(): void
    {
        $this->domain_api_factory = new DomainAPIFactory;
        $this->domain_api = $this->domain_api_factory->create();
        
        $this->data_object_api = $this->createDataObjectAPI();
        $this->test_data_api = $this->createTestDataAPI();
        $this->test_data_factory = $this->test_data_api->createBookTestDataFactory();
        
        $this->api_factory = new APIFactory( TestConstants::STORAGE_PATH, TestConstants::STORAGE_EXTENSION, $this->domain_api );
        $this->api = $this->api_factory->create();

        $this->system_under_test = $this->api->createBookRepository();
    }
    
    protected function tearDown(): void
    {
      $this->system_under_test->add( $this->test_data_factory->create8() );// did not get added
        $this->system_under_test->add( $this->test_data_factory->create0() );
        $this->system_under_test->add( $this->test_data_factory->create9() );    //removed book 0

      $this->system_under_test->add( $this->test_data_factory->create7() );
  
       $this->system_under_test->add( $this->test_data_factory->create1() );
     $this->system_under_test->add( $this->test_data_factory->create2() );  //Test File 
       $this->system_under_test->add( $this->test_data_factory->create3() );
     $this->system_under_test->add( $this->test_data_factory->create4() );  
      $this->system_under_test->add( $this->test_data_factory->create5() );  // This issue? 
     $this->system_under_test->add( $this->test_data_factory->create6() );  //Test File


// issue


        
    }
}
