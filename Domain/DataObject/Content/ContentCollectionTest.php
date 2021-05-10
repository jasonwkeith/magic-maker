<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Infrastructure\Collection\CollectionTestTrait;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class ContentCollectionTest extends TestCase
{
    use TestDataAPIHelperTrait;
    use CollectionTestTrait;

    public function testThatPassingWrongDataTypeToFactoryCreatesException():void
    {
        $test_data_api = $this->getTestDataAPI();
        $wrong_test_data_factory = $test_data_api->createBookTestDataFactory();
        
        $this->verifyThatPassingWrongDataTypeToFactoryCreatesException( $wrong_test_data_factory->createArray( 0 ) );
    }
    
    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createContentTestDataFactory() );   
        $this->setSystemUnderTestFactory( $data_object_api->createContentFactory() );
        $this->setTestData( $this->getTestDataFactory()->createArray( 0 ) );        
        $this->setSystemUnderTest( $this->getSystemUnderTestFactory()->createCollection( ...$this->getTestData() ) );
    }
}
