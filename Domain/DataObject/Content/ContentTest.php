<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;

class ContentTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;
    use TestHelperTrait;

    public function testGetContentReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->text, $this->getSystemUnderTest()->getText() );
    }       

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createContentTestDataFactory() );   
        $this->setSystemUnderTestFactory( $data_object_api->createContentFactory() );
        $this->setTestData( $this->getTestDataFactory()->createRaw( 0 ) );        
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
    }
    
    private function createSystemUnderTest( ContentDataTransferObject $test_data )
    {
        return  $this->getSystemUnderTestFactory()->create( $test_data );
    }    
}
