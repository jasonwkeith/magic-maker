<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Infrastructure\FactoryTestTrait;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class PersonTagFactoryTest extends TestCase
{
    use TestDataAPIHelperTrait;
    use FactoryTestTrait;

    public function testCreateReturnsCorrectInterface():void
    {
        $test_data_factory = $this->getTestDataFactory();
        $test_data = $test_data_factory->createRaw0();
        
        $this->assertInstanceOf( PersonInterface::class, $this->getSystemUnderTest()->create( $test_data[ PersonInterface::GUID ], $test_data[ PersonInterface::FIRST_NAME ], $test_data[ PersonInterface::MIDDLE_NAME ], $test_data[ PersonInterface::LAST_NAME ], $test_data[ PersonInterface::NICKNAME ], $test_data[ PersonInterface::SUFFIX ], $test_data[ PersonInterface::HAS_MD ], $test_data[ PersonInterface::HAS_PHD ] ) );
    }
  
    public function testCreateCollectionReturnsCorrectInterface(): void
    {
        $this->verifyCreateCollectionReturnsCorrectInterface( PersonCollectionInterface::class );
    }   
    
    public function testCreateEmptyCollectionReturnsCorrectInterface():void
    {
        $this->verifyCreateEmptyCollectionReturnsCorrectInterface( PersonCollectionInterface::class );
    }  

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createPersonTestDataFactory() );   
        $this->setTestData( $this->getTestDataFactory()->createArray0() );        
        $this->setSystemUnderTest( $data_object_api->createPersonFactory() );
    }
}
