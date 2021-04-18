<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;



class PersonTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;

    public function testGetFirstNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->test_data[ PersonInterface::FIRST_NAME ], $this->system_under_test->getFirstName() );
    }
    
    public function testGetLastNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->test_data[ PersonInterface::LAST_NAME ], $this->system_under_test->getLastName() );
    }   

    public function testGetMiddleNameDefaultsToEmptyString(): void
    {
        $this->assertEquals( "", $this->system_under_test->getMiddleName() );
    }    
    
    public function testGetMiddleNameReturnsCorrectString(): void
    {
        $this->test_data = $this->test_data_factory->createRawMiddlename();
        
        $this->assertEquals( $this->test_data[ PersonInterface::MIDDLE_NAME ], $this->system_under_test->getMiddleName() );
    }
    
    public function testGetNickNameReturnsCorrectString(): void
    {
        $this->test_data = $this->test_data_factory->createRawNickname();
        $this->system_under_test = $this->system_under_test_factory->create( $this->test_data[ PersonInterface::GUID ], $this->test_data[ PersonInterface::FIRST_NAME ], $this->test_data[ PersonInterface::MIDDLE_NAME ], $this->test_data[ PersonInterface::LAST_NAME ],  $this->test_data[ PersonInterface::NICKNAME ], $this->test_data[ PersonInterface::SUFFIX ], $this->test_data[ PersonInterface::HAS_MD ], $this->test_data[ PersonInterface::HAS_PHD ] );        

        $this->assertEquals( $this->test_data[ PersonInterface::NICKNAME ], $this->system_under_test->getNickName() );
    }   
    
    
    public function testGetSuffixReturnsCorrectString(): void
    {
        $this->assertEquals( $this->test_data[ PersonInterface::SUFFIX ], $this->system_under_test->getSuffix() );
    }    
    
    public function testHasMDDefaultsToFalse(): void
    {
        $this->assertEquals( false, $this->system_under_test->HasMD() );
    }    
    
    public function testHasPHDDefaultsToFalse(): void
    {
        $this->assertEquals( false, $this->system_under_test->HasPHD() );
    }    

    protected function setUp(): void
    {
        $this->data_object_api = $this->createDataObjectAPI();
        $this->test_data_api = $this->createTestDataAPI();
    
        $this->system_under_test_factory = $this->data_object_api->createPersonFactory();
        $this->test_data_factory = $this->test_data_api->createPersonTestDataFactory();
        $this->test_data = $this->test_data_factory->createRaw0();  
        $this->system_under_test = $this->createSystemUnderTest( $this->test_data );
    }
    
    private function createSystemUnderTest( array $test_data )
    {
        return $this->system_under_test_factory->create( $test_data[ PersonInterface::GUID ], $test_data[ PersonInterface::FIRST_NAME ], $test_data[ PersonInterface::MIDDLE_NAME ], $test_data[ PersonInterface::LAST_NAME ],  $test_data[ PersonInterface::NICKNAME ], $test_data[ PersonInterface::SUFFIX ], $test_data[ PersonInterface::HAS_MD ], $test_data[ PersonInterface::HAS_PHD ] );
    }    
}
