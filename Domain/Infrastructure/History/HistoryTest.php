<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\History;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIFactory;
use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIFactory;

class HistoryTest extends TestCase
{
    public function testGetCreatedDateReturnsCorrectDateTimeInterface(): void
    {
        $this->assertSame(  $this->test_data[ HistoryInterface::CREATED_DATE ], $this->system_under_test->getCreatedDate() );
    }

    public function testGetCreatedByReturnsCorrectString(): void
    {
        $this->assertSame(  $this->test_data[ HistoryInterface::CREATED_BY ], $this->system_under_test->getCreatedBy() );
        $this->assertTrue( is_string( $this->system_under_test->getCreatedBy() ) );
    }
    
    public function testGetUpdatedDateReturnsCorrectDateTimeInterface(): void
    {
        $this->assertSame(  $this->test_data[ HistoryInterface::UPDATED_DATE ], $this->system_under_test->getUpdatedDate() );
    }

    public function testGetUpdatedByReturnsCorrectString(): void
    {
        $this->assertSame(  $this->test_data[ HistoryInterface::UPDATED_BY ], $this->system_under_test->getUpdatedBy() );
        $this->assertTrue( is_string( $this->system_under_test->getUpdatedBy() ) );
    }    

    protected function setUp(): void
    {
        $this->exception_factory = new ExceptionFactory();
        $this->data_object_api_factory = new DataObjectAPIFactory( $this->exception_factory );
        $this->data_object_api = $this->data_object_api_factory->create();
        $this->test_data_api_factory = new TestDataAPIFactory( $this->exception_factory, $this->data_object_api );
        $this->test_data_api = $this->test_data_api_factory->create();
        $this->test_data_factory = $this->test_data_api->createHistoryTestDataFactory();
        
        $this->test_data = $this->test_data_factory->createRawDefault();

        $this->system_under_test_factory = $this->data_object_api->createHistoryFactory();
        $this->system_under_test = $this->createSystemUnderTest( $this->test_data );
    }
    
    private function createSystemUnderTest( array $test_data )
    {
        return $this->system_under_test_factory->create
        ( 
            $this->test_data[ HistoryInterface::CREATED_DATE ],
            $this->test_data[ HistoryInterface::CREATED_BY ],
            $this->test_data[ HistoryInterface::UPDATED_DATE ],
            $this->test_data[ HistoryInterface::UPDATED_BY ]      
        );
    }
}
