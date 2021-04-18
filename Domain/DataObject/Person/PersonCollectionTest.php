<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;


class PersonCollectionTest extends TestCase
{
    use TestDataAPIHelperTrait;    
    
    public function testGetAuthorsReturnsCorrectArray(): void
    {
        $this->assertInstanceOf( PersonCollectionInterface::class, $this->system_under_test );
    }    
    
    public function testIteratorIsImplemented(): void
    {
        $i = 0;
        $persons = $this->system_under_test;
        foreach( $persons as $person )
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
    
        $this->system_under_test_factory = $this->data_object_api->createPersonFactory();
        $this->test_data_factory = $this->test_data_api->createPersonTestDataFactory();
        $this->test_data = $this->test_data_factory->createDefault();  
        $this->system_under_test = $this->system_under_test_factory->createCollection( $this->test_data );
    }
       
}
