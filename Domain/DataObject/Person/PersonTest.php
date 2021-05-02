<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;



class PersonTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;
    use TestHelperTrait;
    
    public function testGetFirstNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()[ PersonInterface::FIRST_NAME ], $this->getSystemUnderTest()->getFirstName() );
    }
    
    public function testGetLastNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()[ PersonInterface::LAST_NAME ], $this->getSystemUnderTest()->getLastName() );
    }   

    public function testGetMiddleNameDefaultsToEmptyString(): void
    {
        $this->assertEquals( "", $this->getSystemUnderTest()->getMiddleName() );
    }    
    
    public function testGetMiddleNameReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithMiddlename() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
        
        $this->assertEquals( $this->getTestData()[ PersonInterface::MIDDLE_NAME ], $this->getSystemUnderTest()->getMiddleName() );
    }
    
    public function testGetNickNameReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithNickname() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );

        $this->assertEquals( $this->getTestData()[ PersonInterface::NICKNAME ], $this->getSystemUnderTest()->getNickName() );
    }   

    public function testGetSuffixReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithSuffix() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) ); 
        
        $this->assertEquals( $this->getTestData()[ PersonInterface::SUFFIX ], $this->getSystemUnderTest()->getSuffix() );
    }    
    
    public function testHasMDDefaultsToFalse(): void
    {
        $this->assertFalse( $this->getSystemUnderTest()->HasMD() );
    }    
    
    public function testHasMDReturnsTrue(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithMD() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) ); 
        
        $this->assertTrue( $this->getSystemUnderTest()->HasMD() );
    }     
    
    public function testHasPHDDefaultsToFalse(): void
    {
        $this->assertFalse( $this->getSystemUnderTest()->HasPHD() );
    }    
    
    public function testHasPHDReturnsTrue(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithPHD() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) ); 
        
        $this->assertTrue( $this->getSystemUnderTest()->HasPHD() );
    }      

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createPersonTestDataFactory() );   
        $this->setSystemUnderTestFactory( $data_object_api->createPersonFactory() );
        $this->setTestData( $this->getTestDataFactory()->createRaw0() );        
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
    }
    
    private function createSystemUnderTest( array $test_data )
    {
        return $this->getSystemUnderTestFactory()->create( $test_data[ PersonInterface::GUID ], $test_data[ PersonInterface::FIRST_NAME ], $test_data[ PersonInterface::MIDDLE_NAME ], $test_data[ PersonInterface::LAST_NAME ],  $test_data[ PersonInterface::NICKNAME ], $test_data[ PersonInterface::SUFFIX ], $test_data[ PersonInterface::HAS_MD ], $test_data[ PersonInterface::HAS_PHD ] );
    }    
}
