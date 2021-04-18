<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\GUID;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;

trait GUIDTraitTest
{
    public function testGetGUIDReturnsCorrectString(): void
    {
        $this->assertEquals( $this->test_data[ GUIDINTERFACE::GUID ], $this->system_under_test->getGUID() );
    }  
    
    public function testInvalidStringGUIDThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        
        $test_data = $this->test_data_factory->createRawDefault();  
        $test_data[ GUIDINTERFACE::GUID ]= "garbage value";        
        $this->createSystemUnderTest( $test_data );
    }    
}