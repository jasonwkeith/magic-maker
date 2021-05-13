<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DateTime;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIFactory;
use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIFactory;

class DateTimeTest extends TestCase
{
    public function testGetYearReturnsCorrectInteger(): void
    {
        $this->assertSame(  $this->test_data->year, $this->system_under_test->getYear() );
    }

    public function testGetMonthReturnsCorrectIntegers(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        
        for( $i = 1; $i < 13; $i++ )
        {
            $date_time->month = $i;
            $system_under_test = $this->system_under_test_factory->create( $date_time );
            $this->assertSame(  $i, $system_under_test->getMonth() );
        }
    }

    public function testSetMonthGreaterThan12ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );   
        $date_time->month = 13;        
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }
    
    public function testSetMonthLessThan1ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );    
        $date_time->month = 0;        
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }    
    
    public function testGetDayReturnsCorrectIntegers(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );    
        for( $i = 1; $i < 32; $i++ )
        {
            $date_time->day = $i;            
            $system_under_test = $this->system_under_test_factory->create( $date_time );
            $this->assertSame(  $i, $system_under_test->getDay() );
        }
    }

    public function testSetDayGreaterThan31ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        $date_time->day = 32;
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }
    
    public function testSetDayLessThan1ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        $date_time->day = 0;        
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }      
    
    public function testGetHourReturnsCorrectIntegers(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        for( $i = 0; $i < 24; $i++ )
        {
            $date_time->hour= $i;
            $system_under_test = $this->system_under_test_factory->create( $date_time );
            $this->assertSame(  $i, $system_under_test->getHour() );
        }
    }

    public function testSetHourGreaterThan23ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        $date_time->hour = 24;        
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }
    
    public function testSetHourLessThan0ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        $date_time->hour = -1;          
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }          
       
    public function testGetMinuteReturnsCorrectIntegers(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        for( $i = 0; $i < 60; $i++ )
        {
            $date_time->minute = $i;    
            $system_under_test = $this->system_under_test_factory->create( $date_time );
            $this->assertSame(  $i, $system_under_test->getMinute() );
        }
    }

    public function testSetMinuteGreaterThan59ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        $date_time->minute = 60;
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }
    
    public function testSetMinuteLessThan0ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        $date_time->minute = -1;
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }     
    
    public function testGetSecondReturnsCorrectIntegers(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );      
        for( $i = 0; $i < 60; $i++ )
        {
            $date_time->second = $i;            
            $system_under_test = $this->system_under_test_factory->create( $date_time );
            $this->assertSame(  $i, $system_under_test->getSecond() );
        }
    }

    public function testSetSecondeGreaterThan59ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        $date_time->second = 60;
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }
    
    public function testSetSecondLessThan0ThrowsException(): void
    {
        $date_time = $this->test_data_factory->createRaw( 1 );  
        $date_time->second = -1;        
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test_factory->create( $date_time );
    }     
       

    protected function setUp(): void
    {
        $this->exception_factory = new ExceptionFactory();
        $this->data_object_api_factory = new DataObjectAPIFactory( $this->exception_factory );
        $this->data_object_api = $this->data_object_api_factory->create();
        $this->test_data_api_factory = new TestDataAPIFactory( $this->exception_factory, $this->data_object_api );
        $this->test_data_api = $this->test_data_api_factory->create();
        $this->test_data_factory = $this->test_data_api->createDateTimeTestDataFactory();
        
        $this->test_data = $this->test_data_factory->createRaw( 1 );

        $this->system_under_test_factory = $this->data_object_api->createDateTimeFactory();
        $this->system_under_test = $this->createSystemUnderTest( $this->test_data );
    }
    
    private function createSystemUnderTest( DateTimeDataTransferObject $date_time )
    {
        return $this->system_under_test_factory->create( $date_time );
    }
       
}
