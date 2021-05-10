<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookDataTransferObject;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;

class BookTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;
    use TestHelperTrait;
    
    public function testGetAuthorsReturnsAuthorCollectionInterface(): void
    {
        $this->assertInstanceOf( PersonCollectionInterface::class , $this->getSystemUnderTest()->getAuthors() );
    }    
    
    public function testGetAuthorsReturnsCorrectCollection(): void
    {
        $this->assertEquals( $this->getTestData()->authors, $this->getSystemUnderTest()->getAuthors() );
    }      

    public function testGetPublishedYearReturnsCorrectInteger(): void
    {
        $this->assertEquals( $this->getTestData()->published_year, $this->getSystemUnderTest()->getPublishedYear() );
    }
    
    public function testGetSubtitleReturnsCorrectString(): void
    {
        $this->assertEquals($this->getTestData()->subtitle, $this->getSystemUnderTest()->getSubtitle() );
    }

    public function testGetTitleReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->title, $this->getSystemUnderTest()->getTitle() );
    }

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createBookTestDataFactory() );   
        $this->setSystemUnderTestFactory( $data_object_api->createBookFactory() );
        $this->setTestData( $this->getTestDataFactory()->createRaw( 0 ) );        
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
    }
    
    private function createSystemUnderTest( BookDataTransferObject $test_data )
    {
        return $this->getSystemUnderTestFactory()->create( $test_data );
    }
       
}
