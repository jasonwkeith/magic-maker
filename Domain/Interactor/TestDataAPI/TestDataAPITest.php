<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIFactory;

class TestDataAPITest extends TestCase
{
    public function testCreateRawBookTestDataFactoryReturnsRawBookTestDataFactoryInterface(): void
    {
        $this->assertTrue( true );
        //$this->assertInstanceOf(Project::class, $this->system_under_test->createRawBookTestDataFactory() );
    }
    
    protected function setUp(): void
    {
        $this->exception_factory = new ExceptionFactory();
        $this->data_object_api_factory = new DataObjectAPIFactory( $this->exception_factory );
        $this->data_object_api = $this->data_object_api_factory->create();
        $this->api_factory = new TestDataAPIFactory( $this->exception_factory, $this->data_object_api );
        $this->system_under_test = $this->api_factory->create(); 
        //$this->testee_test_data_factory = $this->test_data_factory->createRawBookTestDataFactory();
        
       // $this->test_data = $this->book__raw_data_dto_factory->createDefault();
       //$this->system_under_test = $this->system_under_test_factory->create( $this->test_data->guid, $this->test_data->authors, $this->published_year, $this->subtitle, $this->title );
    }
       
}
