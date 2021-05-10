<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;

class APITest extends TestCase
{
    public function testCreateApplicationFactoryReturnsBookFactoryInterface(): void
    {
         $this->assertInstanceOf( ApplicationFactoryInterface::class, $this->api->createApplicationFactory() );
    }  
    
    public function testCreateApplicationTestDataFactoryReturnsBookFactoryInterface(): void
    {
        $this->assertInstanceOf( ApplicationTestDataFactoryInterface::class, $this->api->createApplicationTestDataFactory() );
    } 
    
    public function testCreateBookFactoryReturnsBookFactoryInterface(): void
    {
         $this->assertInstanceOf( BookFactoryInterface::class, $this->api->createBookFactory() );
    }  
    
    public function testCreateBookTestDataFactoryReturnsBookFactoryInterface(): void
    {
        $this->assertInstanceOf( BookTestDataFactoryInterface::class, $this->api->createBookTestDataFactory() );
    } 
    
    public function testCreateContentTestDataFactoryReturnsContentFactoryInterface(): void
    {
        $this->assertInstanceOf( ContentTestDataFactoryInterface::class, $this->api->createContentTestDataFactory() );
    }     
    
    public function testCreateDateTimeFactoryReturnsUserFactoryInterface(): void
    {
        $this->assertInstanceOf( DateTimeFactoryInterface::class, $this->api->createDateTimeFactory() );
    }     

    public function testCreateDateTimeTestDataFactoryReturnsUserFactoryInterface(): void
    {
        $this->assertInstanceOf( DateTimeTestDataFactoryInterface::class, $this->api->createDateTimeTestDataFactory() );
    }      
    
    public function testCreateExceptionFactoryReturnsBookFactoryInterface(): void
    {
        $this->assertInstanceOf( ExceptionFactoryInterface::class, $this->api->createExceptionFactory() );
    }    

    public function testCreateExceptionTestDataFactoryReturnsBookFactoryInterface(): void
    {
        $this->assertInstanceOf( ExceptionTestDataFactoryInterface::class, $this->api->createExceptionTestDataFactory() );
    }

    public function testCreatePersonFactoryReturnsBookFactoryInterface(): void
    {
        $this->assertInstanceOf( PersonFactoryInterface::class, $this->api->createPersonFactory() );
    }     

    public function testCreatePersonTestDataFactoryReturnsBookFactoryInterface(): void
    {
        $this->assertInstanceOf( PersonTestDataFactoryInterface::class, $this->api->createPersonTestDataFactory() );
    } 
    
    public function testCreateUserFactoryReturnsUserFactoryInterface(): void
    {
        $this->assertInstanceOf( UserFactoryInterface::class, $this->api->createUserFactory() );
    }     

    public function testCreateUserTestDataFactoryReturnsUserFactoryInterface(): void
    {
        $this->assertInstanceOf( UserTestDataFactoryInterface::class, $this->api->createUserTestDataFactory() );
    }    

    protected function setUp(): void
    {
        $this->api_factory = new APIFactory();
        $this->api = $this->api_factory->create();
    }
}
