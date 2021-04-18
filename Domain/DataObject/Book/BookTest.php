<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;

class BookTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;
    
    public function testGetAuthorsReturnsAuthorCollectionInterface(): void
    {
        $this->assertInstanceOf( PersonCollectionInterface::class , $this->system_under_test->getAuthors() );
    }    
    
    public function testGetAuthorsReturnsCorrectCollection(): void
    {
        $this->assertEquals( $this->test_data[ BookInterface::AUTHORS ], $this->system_under_test->getAuthors() );
    }      

    public function testGetPublishedYearReturnsCorrectInteger(): void
    {
        $this->assertEquals( $this->test_data[ BookInterface::PUBLISHED_YEAR ], $this->system_under_test->getPublishedYear() );
    }
    
    public function testGetSubtitleReturnsCorrectString(): void
    {
        $this->assertEquals( $this->test_data[ BookInterface::SUBTITLE ], $this->system_under_test->getSubtitle() );
    }

    public function testGetTitleReturnsCorrectString(): void
    {
        $this->assertEquals( $this->test_data[ BookInterface::TITLE ], $this->system_under_test->getTitle() );
    }

    protected function setUp(): void
    {
        $this->data_object_api = $this->createDataObjectAPI();
        $this->test_data_api = $this->createTestDataAPI();
    
        $this->system_under_test_factory = $this->data_object_api->createBookFactory();
        $this->test_data_factory = $this->test_data_api->createBookTestDataFactory();
        $this->test_data = $this->test_data_factory->createRaw0();  
        $this->system_under_test = $this->createSystemUnderTest( $this->test_data );
    }
    
    private function createSystemUnderTest( array $test_data )
    {
        return $this->system_under_test_factory->create( $test_data[ BookInterface::GUID ], $test_data[ BookInterface::AUTHORS ], $test_data[ BookInterface::PUBLISHED_YEAR ], $test_data[ BookInterface::TITLE ], $test_data[ BookInterface::SUBTITLE ]  );
    }
       
}
