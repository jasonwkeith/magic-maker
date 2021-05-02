<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\GUID;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;

trait GUIDTraitTest
{
    public function testGetGUIDReturnsCorrectString(): void
    {
        $test_data = $this->getTestData();
        $this->assertEquals( $test_data[ GUIDINTERFACE::GUID ], $this->getSystemUnderTest()->getGUID() );
    }  
    
    public function testInvalidStringGUIDThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $test_data_factory = $this->getTestDataFactory();
        
        $test_data = $test_data_factory->createRawDefault();  
        $test_data[ GUIDINTERFACE::GUID ]= "garbage value";        
        $this->createSystemUnderTest( $test_data );
    }    
}