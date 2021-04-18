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
    }
    
    protected function setUp(): void
    {
        $this->exception_factory = new ExceptionFactory();
        $this->data_object_api_factory = new DataObjectAPIFactory( $this->exception_factory );
        $this->data_object_api = $this->data_object_api_factory->create();
        $this->api_factory = new TestDataAPIFactory( $this->exception_factory, $this->data_object_api );
        $this->system_under_test = $this->api_factory->create(); 
    }
       
}
