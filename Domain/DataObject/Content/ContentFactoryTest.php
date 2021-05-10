<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Infrastructure\FactoryTestTrait;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class ContentFactoryTest extends TestCase
{
    use TestDataAPIHelperTrait;
    use FactoryTestTrait;

    public function testCreateReturnsCorrectInterface():void
    {
        $test_data_factory = $this->getTestDataFactory();
        $test_data = $test_data_factory->createRaw( 0 );
        
        $this->assertInstanceOf( ContentInterface::class, $this->getSystemUnderTest()->create( $test_data ) );
    }
  
    public function testCreateCollectionReturnsCorrectInterface(): void
    {
        $this->verifyCreateCollectionReturnsCorrectInterface( ContentCollectionInterface::class );
    }   
    
    public function testCreateEmptyCollectionReturnsCorrectInterface():void
    {
        $this->verifyCreateEmptyCollectionReturnsCorrectInterface( ContentCollectionInterface::class );
    }  

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createContentTestDataFactory() );   
        $this->setTestData( $this->getTestDataFactory()->createArray( 0 ) );        
        $this->setSystemUnderTest( $data_object_api->createContentFactory() );
    }
}
