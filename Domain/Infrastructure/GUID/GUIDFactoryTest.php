<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\GUID;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Interactor\TestData\TestDataFactory;
use Ramsey\Uuid\Uuid;

class GUIDFactoryTest extends TestCase
{
    public function testCreateReturnsValidGUID(): void
    {
        $this->assertTrue( Uuid::isValid( $this->system_under_test->create() ) );
    }   

    protected function setUp(): void
    {
        $this->system_under_test = new GUIDFactory;
    }
       
}
