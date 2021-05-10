<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Infrastructure\FactoryTestTrait;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class ApplicationFactoryTest extends TestCase
{
    use TestDataAPIHelperTrait;
    use FactoryTestTrait;

    public function testCreateReturnsCorrectInterface():void
    {
        $test_data = $this->getTestDataFactory()->createRaw( 0 );
        $this->assertInstanceOf( ApplicationInterface::class, $this->getSystemUnderTest()->create( $test_data ) );
    }
  
    public function testCreateCollectionReturnsCorrectInterface(): void
    {
        $this->verifyCreateCollectionReturnsCorrectInterface( ApplicationCollectionInterface::class );
    }   
    
    public function testCreateEmptyCollectionReturnsCorrectInterface():void
    {
        $this->verifyCreateEmptyCollectionReturnsCorrectInterface( ApplicationCollectionInterface::class );
    }  

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createApplicationTestDataFactory() );   
        $this->setTestData( $this->getTestDataFactory()->createArray( 0 ) );        
        $this->setSystemUnderTest( $data_object_api->createApplicationFactory() );
    }
}
