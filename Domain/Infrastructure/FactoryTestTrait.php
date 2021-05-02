<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\TestHelperTrait;

trait FactoryTestTrait
{
    use TestHelperTrait;
    
    public function verifyCreateCollectionReturnsCorrectInterface( $interface ): void
    {
        $this->assertInstanceOf( $interface, $this->getSystemUnderTest()->createCollection( ...$this->getTestData() ) );
    }     

    public function verifyCreateEmptyCollectionReturnsCorrectInterface( $interface ): void
    {
        $this->assertInstanceOf( $interface, $this->getSystemUnderTest()->createEmptyCollection() );
    }  
}
