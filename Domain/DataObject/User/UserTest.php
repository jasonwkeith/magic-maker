<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTraitTest;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserDataTransferObject;

class UserTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;
    use TestHelperTrait;
    
    public function testGetApplicationGUIDReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->application->getGUID(), $this->getSystemUnderTest()->getApplicationGUID() );
    }       
    
    public function testGetApplicationGUIDDefaultsToEmptyString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithoutApplicationName() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );        
        
        $this->assertEquals( "", $this->getSystemUnderTest()->getApplicationGUID() );
    }      
    
    public function testGetFirstNameDefaultsToEmptyString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithoutUser() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );        
        
        $this->assertEquals( "", $this->getSystemUnderTest()->getFirstName() );
    }        
    
    public function testGetFirstNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->person->getFirstName(), $this->getSystemUnderTest()->getFirstName() );
    }
    
    public function testGetFirstNameReturnsEmptyString(): void
    {
        $this->assertEquals( $this->getTestData()->person->getFirstName(), $this->getSystemUnderTest()->getFirstName() );
    }    
    
    public function testGetLastNameDefaultsToEmptyString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithoutUser() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );        
        
        $this->assertEquals( "", $this->getSystemUnderTest()->getLastName() );
    }     
    
    public function testGetLastNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->person->getLastName(), $this->getSystemUnderTest()->getLastName() );
    }   

    public function testGetMiddleNameDefaultsToEmptyString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithoutUser() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );        
        
        $this->assertEquals( "", $this->getSystemUnderTest()->getMiddleName() );
    }    
    
    public function testGetMiddleNameReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithMiddlename() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
        
        $this->assertEquals( $this->getTestData()->person->getMiddleName(), $this->getSystemUnderTest()->getMiddleName() );
    }
    
    public function testGetNicknameDefaultsToEmptyString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithoutUser() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );        
        
        $this->assertEquals( "", $this->getSystemUnderTest()->getNickname() );
    }     
    
    public function testGetNickNameReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithNickname() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );

        $this->assertEquals( $this->getTestData()->person->getNickname(), $this->getSystemUnderTest()->getNickName() );
    }   
    
    public function testGetPersonGUIDDefaultsToEmptyString(): void
    {
        $user_data_transfer_object = $this->getTestDataFactory()->createRawWithoutUser() ;
        $this->setSystemUnderTest( $this->createSystemUnderTest( $user_data_transfer_object ) );        
        
        $this->assertEquals( "", $this->getSystemUnderTest()->getPersonGUID() );
    }     

    public function testGetPersonGUIDReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->person->getGUID(), $this->getSystemUnderTest()->getPersonGUID() );
    }       
    
    public function testGetSuffixDefaultsToEmptyString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithoutUser() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );        
        
        $this->assertEquals( "", $this->getSystemUnderTest()->getSuffix() );
    }     

    public function testGetSuffixReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()->person->getSuffix(), $this->getSystemUnderTest()->getSuffix() );
    }    
    
    public function testGetNameReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithApplicationName() );      
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );           
        $this->assertEquals( $this->getTestData()->application->getName(), $this->getSystemUnderTest()->getApplicationName() );
    }      
    
    public function testGetNameReturnsEmptyStringWhenApplicationIsNull(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithoutApplicationName() );      
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );        
        $this->assertEquals( "", $this->getSystemUnderTest()->getApplicationName() );
    }      

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createUserTestDataFactory() );   
        $this->setSystemUnderTestFactory( $data_object_api->createUserFactory() );
        $this->setTestData( $this->getTestDataFactory()->createRaw( 0 ) );        
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
    }
    
    private function createSystemUnderTest( UserDataTransferObject $user )
    {
        return $this->getSystemUnderTestFactory()->create( $user );
    }    
}
