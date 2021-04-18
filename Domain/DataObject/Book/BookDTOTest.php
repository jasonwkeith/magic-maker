<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class BookDTOTest extends TestCase
{
    use TestDataAPIHelperTrait;
        
    public function testGuidKeyDefaultsToEmptyString(): void
    {
        $this->assertEquals( "" , $this->system_under_test[ BookInterface::GUID ] );
    }    
    
    public function testAuthorsKeyDefaultsToEmptyArray(): void
    {
        $this->assertEquals( "" , $this->system_under_test[ BookInterface::AUTHORS ] );
    }      
    
    public function testPublishedYearKeyDefaultsToZero(): void
    {
        $this->assertEquals( 0 , $this->system_under_test[ BookInterface::PUBLISHED_YEAR ] );
    }  
    
    public function testSubtitleKeyDefaultsToEmptyString(): void
    {
        $this->assertEquals( "" , $this->system_under_test[ BookInterface::SUBTITLE ] );
    }       

    public function testTitleKeyDefaultsToEmptyString(): void
    {
        $this->assertEquals( "" , $this->system_under_test[ BookInterface::TITLE ] );
    }   

    protected function setUp(): void
    {
        $this->data_object_api = $this->createDataObjectAPI();        
        $this->system_under_test_factory = $this->data_object_api->createBookFactory();
        $this->system_under_test = $this->system_under_test_factory->createDTO();
    }
}
