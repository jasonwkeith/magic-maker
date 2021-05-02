<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class ApplicationDTOTest extends TestCase
{
    use TestDataAPIHelperTrait;
        
    public function testGuidKeyDefaultsToEmptyString(): void
    {
        $this->assertEquals( "" , $this->system_under_test[ ApplicationInterface::GUID ] );
    }    
    
    public function testNameKeyDefaultsToEmptyString(): void
    {
        $this->assertEquals( "" , $this->system_under_test[ ApplicationInterface::NAME ] );
    }      

    protected function setUp(): void
    {
        $this->data_object_api = $this->createDataObjectAPI();        
        $this->system_under_test_factory = $this->data_object_api->createApplicationFactory();
        $this->system_under_test = $this->system_under_test_factory->createDTO();
    }
}
