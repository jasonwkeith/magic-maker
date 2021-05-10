<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class ApplicationCollectionTest extends TestCase
{
    use TestDataAPIHelperTrait;
    
    public function testGetAuthorsReturnsCorrectArray(): void
    {
        $this->assertInstanceOf( ApplicationCollectionInterface::class, $this->system_under_test );
    }    
    
    public function testIteratorIsImplemented(): void
    {
        $i = 0;
        $Applications = $this->system_under_test;
        foreach( $Applications as $Application )
        {
            $i++;
        }
        
        $this->assertGreaterThan( 0, $i );
    }

    public function testCollectionReturnsOriginalArray(): void
    {
        $this->system_under_test = $this->system_under_test_factory->createCollection( ...$this->test_data );        
        $this->assertEquals( $this->test_data, $this->system_under_test->toArray() );
    }

    protected function setUp(): void
    {

        $this->data_object_api = $this->createDataObjectAPI();
        $this->test_data_api = $this->createTestDataAPI();
        $this->test_data_factory = $this->test_data_api->createApplicationTestDataFactory();
        $this->system_under_test_factory = $this->data_object_api->createApplicationFactory();
        $this->test_data = $this->test_data_factory->createArray( 0 );

        $this->system_under_test = $this->system_under_test_factory->createCollection( ...$this->test_data );
    }
       
}
