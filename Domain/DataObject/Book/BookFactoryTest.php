<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Infrastructure\FactoryTestTrait;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;

class BookFactoryTest extends TestCase
{
    use TestDataAPIHelperTrait;
    use FactoryTestTrait;

    public function testCreateReturnsCorrectInterface():void
    {
        $test_data_factory = $this->getTestDataFactory();
        $test_data = $test_data_factory->createRaw( 0 );
        $this->assertInstanceOf( BookInterface::class, $this->getSystemUnderTest()->create( $test_data ) );
    }
  
    public function testCreateCollectionReturnsCorrectInterface(): void
    {
        $this->verifyCreateCollectionReturnsCorrectInterface( BookCollectionInterface::class );
    }   
    
    public function testCreateEmptyCollectionReturnsCorrectInterface():void
    {
        $this->verifyCreateEmptyCollectionReturnsCorrectInterface( BookCollectionInterface::class );
    }  

    protected function setUp(): void
    {
        $data_object_api = $this->createDataObjectAPI();
        $test_data_api = $this->createTestDataAPI();

        $this->setDataObjectAPI( $data_object_api );
        $this->setTestDataAPI( $test_data_api );
        $this->setTestDataFactory( $test_data_api->createBookTestDataFactory() );   
        $this->setTestData( $this->getTestDataFactory()->createArray( 0 ) );        
        $this->setSystemUnderTest( $data_object_api->createBookFactory() );
    }
}
