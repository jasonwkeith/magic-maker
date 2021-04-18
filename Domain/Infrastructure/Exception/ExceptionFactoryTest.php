<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\Exception;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIFactory;
use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIFactory;

class ExceptionFactoryTest extends TestCase
{
    public function testCreateReturnsException(): void
    {
        $this->assertEquals( new Exception( $this->test_data ), $this->system_under_test->create( $this->test_data ) );
    }   
    
    public function testCreateReturnsInstanceOfExceptionInterface(): void
    {
        $this->assertInstanceOf(  ExceptionInterface::class, $this->system_under_test->create( $this->test_data ) );
    }

    protected function setUp(): void
    {
        $this->exception_factory = new ExceptionFactory();
        $this->data_object_api_factory = new DataObjectAPIFactory( $this->exception_factory );
        $this->data_object_api = $this->data_object_api_factory->create();
        $this->test_data_api_factory = new TestDataAPIFactory( $this->exception_factory, $this->data_object_api );
        $this->test_data_api = $this->test_data_api_factory->create();
        $this->test_data_factory = $this->test_data_api->createExceptionTestDataFactory();
        
        $this->test_data = $this->test_data_factory->createRawDefault();

        $this->system_under_test = new ExceptionFactory;
    }
       
}
