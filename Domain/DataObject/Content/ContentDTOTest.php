<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class ContentDTOTest extends TestCase
{
    use TestDataAPIHelperTrait;
        
    public function testGuidKeyDefaultsToEmptyString(): void
    {
        $this->assertEquals( "" , $this->system_under_test[ ContentInterface::GUID ] );
    }    
    
    protected function setUp(): void
    {
        $this->data_object_api = $this->createDataObjectAPI();        
        $this->system_under_test_factory = $this->data_object_api->createContentFactory();
        $this->system_under_test = $this->system_under_test_factory->createDTO();
    }
}
