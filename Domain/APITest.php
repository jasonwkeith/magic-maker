<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;

class APITest extends TestCase
{
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

    protected function setUp(): void
    {
        $this->api_factory = new APIFactory();
        $this->api = $this->api_factory->create();
    }
}
