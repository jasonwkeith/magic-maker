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

class UserTest extends TestCase
{
    use GUIDTraitTest;
    use TestDataAPIHelperTrait;
    use TestHelperTrait;
    
    public function testGetFirstNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()[ UserInterface::PERSON ]->getFirstName(), $this->getSystemUnderTest()->getFirstName() );
    }
    
    public function testGetLastNameReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()[ UserInterface::PERSON ]->getLastName(), $this->getSystemUnderTest()->getLastName() );
    }   

    public function testGetMiddleNameDefaultsToEmptyString(): void
    {
        $this->assertEquals( "", $this->getSystemUnderTest()->getMiddleName() );
    }    
    
    public function testGetMiddleNameReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithMiddlename() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
        
        $this->assertEquals( $this->getTestData()[ UserInterface::PERSON ]->getMiddleName(), $this->getSystemUnderTest()->getMiddleName() );
    }
    
    public function testGetNickNameReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithNickname() );
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );

        $this->assertEquals( $this->getTestData()[ UserInterface::PERSON ]->getNickname(), $this->getSystemUnderTest()->getNickName() );
    }   

    public function testGetSuffixReturnsCorrectString(): void
    {
        $this->assertEquals( $this->getTestData()[ UserInterface::PERSON ]->getSuffix(), $this->getSystemUnderTest()->getSuffix() );
    }    
    
    public function testGetNameReturnsCorrectString(): void
    {
        $this->setTestData( $this->getTestDataFactory()->createRawWithApplicationName() );      
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );           
        $this->assertEquals( $this->getTestData()[ UserInterface::APPLICATION ]->getName(), $this->getSystemUnderTest()->getApplicationName() );
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
        $this->setTestData( $this->getTestDataFactory()->createRaw0() );        
        $this->setSystemUnderTest( $this->createSystemUnderTest( $this->getTestData() ) );
    }
    
    private function createSystemUnderTest( array $test_data )
    {
        return $this->getSystemUnderTestFactory()->create( $test_data[ UserInterface::GUID ], $test_data[ UserInterface::PERSON ], $test_data[ UserInterface::APPLICATION ] );
    }    
}
