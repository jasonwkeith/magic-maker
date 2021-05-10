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
        $this->assertEquals( $test_data->guid, $this->getSystemUnderTest()->getGUID() );
    }  
    
    public function testInvalidStringGUIDThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $test_data_factory = $this->getTestDataFactory();
        
        $test_data = $test_data_factory->createRaw( 0 );  
        $test_data->guid= "garbage value";        
        $this->createSystemUnderTest( $test_data );
    }    
}