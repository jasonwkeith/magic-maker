<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DateTime;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIFactory;
use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIFactory;

class DateTimeTest extends TestCase
{
    public function testGetYearReturnsCorrectInteger(): void
    {
        $this->assertSame(  $this->test_data[ DateTimeInterface::YEAR ], $this->system_under_test->getYear() );
    }

    public function testSetYearToNULL(): void
    {
        $system_under_test = $this->createSystemUnderTest( $this->test_data_factory->createRawDefault() );
        $this->assertNull( $this->system_under_test->getMonth() );
    }
    
    public function testGetMonthReturnsCorrectIntegers(): void
    {
        for( $i = 1; $i < 13; $i++ )
        {
            $system_under_test = $this->system_under_test_factory->create( NULL, $i, NULL, NULL, NULL, NULL );
            $this->assertSame(  $i, $system_under_test->getMonth() );
        }
    }

    public function testSetMonthToNULL(): void
    {
        $system_under_test = $this->createSystemUnderTest( $this->test_data_factory->createRawDefault() );
        $this->assertNull( $this->system_under_test->getMonth() );
    }    
    
    public function testSetMonthGreaterThan12ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, 13, NULL, NULL, NULL, NULL );
    }
    
    public function testSetMonthLessThan1ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, 0, NULL, NULL, NULL, NULL );
    }    
    
    public function testGetDayReturnsCorrectIntegers(): void
    {
        for( $i = 1; $i < 32; $i++ )
        {
            $system_under_test = $this->system_under_test_factory->create( NULL, NULL, $i, NULL, NULL, NULL );
            $this->assertSame(  $i, $system_under_test->getDay() );
        }
    }

    public function testSetDayToNULL(): void
    {
        $system_under_test = $this->createSystemUnderTest( $this->test_data_factory->createRawDefault() );
        $this->assertNull( $this->system_under_test->getDay() );
    }    
    
    public function testSetDayGreaterThan31ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, NULL, 32, NULL, NULL, NULL );
    }
    
    public function testSetDayLessThan1ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, NULL, 0, NULL, NULL, NULL );
    }      
    
    public function testGetHourReturnsCorrectIntegers(): void
    {
        for( $i = 0; $i < 24; $i++ )
        {
            $system_under_test = $this->system_under_test_factory->create( NULL, NULL, NULL, $i, NULL, NULL );
            $this->assertSame(  $i, $system_under_test->getHour() );
        }
    }

    public function testSetHourToNULL(): void
    {
        $system_under_test = $this->createSystemUnderTest( $this->test_data_factory->createRawDefault() );
        $this->assertNull( $this->system_under_test->getHour() );
    }    
    
    public function testSetHourGreaterThan23ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, NULL, NULL, 24,  NULL, NULL );
    }
    
    public function testSetHourLessThan0ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, NULL, NULL, -1,  NULL, NULL );
    }          
       
    public function testGetMinuteReturnsCorrectIntegers(): void
    {
        for( $i = 0; $i < 60; $i++ )
        {
            $system_under_test = $this->system_under_test_factory->create( NULL, NULL, NULL, NULL, $i, NULL );
            $this->assertSame(  $i, $system_under_test->getMinute() );
        }
    }

    public function testSetMinuteToNULL(): void
    {
        $system_under_test = $this->createSystemUnderTest( $this->test_data_factory->createRawDefault() );
        $this->assertNull( $this->system_under_test->getMinute() );
    }    
    
    public function testSetMinuteGreaterThan59ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, NULL, NULL, NULL, 60, NULL );
    }
    
    public function testSetMinuteLessThan0ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, NULL, NULL, NULL, -1, NULL );
    }     
    
    public function testGetSecondReturnsCorrectIntegers(): void
    {
        for( $i = 0; $i < 60; $i++ )
        {
            $system_under_test = $this->system_under_test_factory->create( NULL, NULL, NULL, NULL, NULL, $i );
            $this->assertSame(  $i, $system_under_test->getSecond() );
        }
    }

    public function testSetSecondToNULL(): void
    {
        $system_under_test = $this->createSystemUnderTest( $this->test_data_factory->createRawDefault() );
        $this->assertNull( $this->system_under_test->getSecond() );
    }    
    
    public function testSetSecondeGreaterThan59ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, NULL, NULL, NULL, NULL, 60 );
    }
    
    public function testSetSecondLessThan0ThrowsException(): void
    {
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( NULL, NULL, NULL, NULL, NULL, -1 );
    }     
       

    protected function setUp(): void
    {
        $this->exception_factory = new ExceptionFactory();
        $this->data_object_api_factory = new DataObjectAPIFactory( $this->exception_factory );
        $this->data_object_api = $this->data_object_api_factory->create();
        $this->test_data_api_factory = new TestDataAPIFactory( $this->exception_factory, $this->data_object_api );
        $this->test_data_api = $this->test_data_api_factory->create();
        $this->test_data_factory = $this->test_data_api->createDateTimeTestDataFactory();
        
        $this->test_data = $this->test_data_factory->createRawDefault();

        $this->system_under_test_factory = $this->data_object_api->createDateTimeFactory();
        $this->system_under_test = $this->createSystemUnderTest( $this->test_data );
    }
    
    private function createSystemUnderTest( array $test_data )
    {
        return $this->system_under_test_factory->create
        ( 
            $this->test_data[ DateTimeInterface::YEAR ],
            $this->test_data[ DateTimeInterface::MONTH ],
            $this->test_data[ DateTimeInterface::DAY ],
            $this->test_data[ DateTimeInterface::HOUR ],
            $this->test_data[ DateTimeInterface::MINUTE ],
            $this->test_data[ DateTimeInterface::SECOND ],            
        );
    }
       
}
