<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;

class ApplicationTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;
    use TestHelperTrait;
    
    public function testGetNameReturnsCorrectString(): void
    {
        $test_data = $this->getTestData();
        $this->assertSame( $test_data[ ApplicationInterface::NAME ] , $this->getSystemUnderTest()->getName() );
    }    
    
    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createApplicationTestDataFactory() );   
        $this->setSystemUnderTestFactory( $data_object_api->createApplicationFactory() );        
        $this->setTestData( $this->getTestDataFactory()->createRaw0() );        
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
    }
    
    private function createSystemUnderTest( array $test_data )
    {
        return $this->getSystemUnderTestFactory()->create( $test_data[ ApplicationInterface::GUID ], $test_data[ ApplicationInterface::NAME ] );
    }
       
}
