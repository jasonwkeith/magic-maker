<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonDataTransferObject;



class PersonTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;
    use TestHelperTrait;
    
    public function testGetFirstNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->first_name, $this->getSystemUnderTest()->getFirstName() );
    }
    
    public function testGetLastNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->last_name, $this->getSystemUnderTest()->getLastName() );
    }   

    public function testGetMiddleNameDefaultsToEmptyString(): void
    {
        $this->assertEquals( "", $this->getSystemUnderTest()->getMiddleName() );
    }    
    
    public function testGetMiddleNameReturnsCorrectString(): void
    {
        $test_data = $this->getTestData();
        $test_data->middle_name = "James William";
        $this->setSystemUnderTest( $this->createSystemUnderTest( $test_data ) );
        
        $this->assertEquals( $test_data->middle_name, $this->getSystemUnderTest()->getMiddleName() );
    }
    
    public function testGetNickNameReturnsCorrectString(): void
    {
        $test_data = $this->getTestData();
        $test_data->nickname = "King";
        $this->setSystemUnderTest( $this->createSystemUnderTest( $test_data ) );

        $this->assertEquals( $test_data->nickname, $this->getSystemUnderTest()->getNickName() );
    }   

    public function testGetSuffixReturnsCorrectString(): void
    {
        $test_data = $this->getTestData();
        $test_data->suffix = "junior";
        $this->setSystemUnderTest( $this->createSystemUnderTest( $test_data ) ); 
        
        $this->assertEquals( $test_data->suffix, $this->getSystemUnderTest()->getSuffix() );
    }    
    
    public function testHasMDDefaultsToFalse(): void
    {
        $this->assertFalse( $this->getSystemUnderTest()->HasMD() );
    }    
    
    public function testHasMDReturnsTrue(): void
    {
        $test_data = $this->getTestData();
        $test_data->has_md = true;
        $this->setSystemUnderTest( $this->createSystemUnderTest( $test_data ) ); 
        
        $this->assertTrue( $this->getSystemUnderTest()->HasMD() );
    }     
    
    public function testHasPHDDefaultsToFalse(): void
    {
        $this->assertFalse( $this->getSystemUnderTest()->HasPHD() );
    }    
    
    public function testHasPHDReturnsTrue(): void
    {
        $test_data = $this->getTestData();
        $test_data->has_phd = true;
        $this->setSystemUnderTest( $this->createSystemUnderTest( $test_data ) ); 
        
        $this->assertTrue( $this->getSystemUnderTest()->HasPHD() );
    }      

    public function testTrue():void
    {
        $this->assertTrue( true );
    }
    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createPersonTestDataFactory() );   
        $this->setSystemUnderTestFactory( $data_object_api->createPersonFactory() );
        $this->setTestData( $this->getTestDataFactory()->createRaw( 0 ) );        
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
    }
    
    private function createSystemUnderTest( PersonDataTransferObject $data_transfer_object )
    {
        return $this->getSystemUnderTestFactory()->create( $data_transfer_object );
    }    
}
