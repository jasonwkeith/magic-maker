<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
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
        $this->assertEquals( $this->getTestData()[ BookInterface::AUTHORS ], $this->getSystemUnderTest()->getAuthors() );
    }      

    public function testGetPublishedYearReturnsCorrectInteger(): void
    {
        $this->assertEquals( $this->getTestData()[ BookInterface::PUBLISHED_YEAR ], $this->getSystemUnderTest()->getPublishedYear() );
    }
    
    public function testGetSubtitleReturnsCorrectString(): void
    {
        $this->assertEquals($this->getTestData()[ BookInterface::SUBTITLE ], $this->getSystemUnderTest()->getSubtitle() );
    }

    public function testGetTitleReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()[ BookInterface::TITLE ], $this->getSystemUnderTest()->getTitle() );
    }

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createBookTestDataFactory() );   
        $this->setSystemUnderTestFactory( $data_object_api->createBookFactory() );
        $this->setTestData( $this->getTestDataFactory()->createRaw0() );        
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
    }
    
    private function createSystemUnderTest( array $test_data )
    {
        return $this->getSystemUnderTestFactory()->create( $test_data[ BookInterface::GUID ], $test_data[ BookInterface::AUTHORS ], $test_data[ BookInterface::PUBLISHED_YEAR ], $test_data[ BookInterface::TITLE ], $test_data[ BookInterface::SUBTITLE ]  );
    }
       
}
