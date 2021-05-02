<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;


class UserCollectionTest extends TestCase
{
    use TestDataAPIHelperTrait;    
    
    public function testCreateCollectionReturnsCorrectCollection(): void
    {
        $this->assertInstanceOf( UserCollectionInterface::class, $this->system_under_test );
    }    
    
    public function testIteratorIsImplemented(): void
    {
        $i = 0;
        $Users = $this->system_under_test;
        foreach( $Users as $User )
        {
            $i++;
        }
        
        $this->assertGreaterThan( 0, $i );
    }
    
    public function testCollectionReturnsOriginalArray(): void
    {
        $this->test_data = $this->test_data_factory->createArray0(); 
        $this->system_under_test = $this->system_under_test_factory->createCollection( ...$this->test_data );        
        $this->assertEquals( $this->test_data, $this->system_under_test->toArray() );
    }

    protected function setUp(): void
    {
        $this->data_object_api = $this->createDataObjectAPI();
        $this->test_data_api = $this->createTestDataAPI();
    
        $this->system_under_test_factory = $this->data_object_api->createUserFactory();
        $this->test_data_factory = $this->test_data_api->createUserTestDataFactory();
        $this->test_data = $this->test_data_factory->createDefault();  
        $this->system_under_test = $this->system_under_test_factory->createCollection( $this->test_data );
    }
       
}
