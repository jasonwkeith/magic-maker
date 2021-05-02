<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\Collection;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;

trait CollectionTestTrait
{
    use TestHelperTrait;
    
    public function verifyThatPassingWrongDataTypeToFactoryCreatesException( array $wrong_data_types ): void
    {
        $this->expectException( \TypeError::class );
        $factory = $this->getSystemUnderTestFactory();
        $factory->createCollection( ...$wrong_data_types );
    }    
    
    public function testIteratorIsImplemented(): void
    {
        $i = 0;
        $objects = $this->getSystemUnderTest();
        foreach( $objects as $object )
        {
            $i++;
        }
        
        $this->assertGreaterThan( 0, $i );
    }
    
    public function testToArrayReturnsCorrectData(): void
    {
        $factory = $this->getSystemUnderTestFactory();        
        $system_under_test = $factory->createCollection( ...$this->getTestData() );        
        $this->assertEquals( $this->getTestData(), $system_under_test->toArray() );
    }
}
