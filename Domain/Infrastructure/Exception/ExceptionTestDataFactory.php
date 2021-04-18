<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\Exception;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;

class ExceptionTestDataFactory implements ExceptionTestDataFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;
    }
    
    public function create0(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw0() );
    }
    
    public function create1(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw1() );
    }
    
    public function create2(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw2() );
    }
    
    public function create3(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw3() );
    }
    
    public function create4(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw4() );
    }
    
    public function create5(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw5() );
    }
    
    public function create6(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw6() );
    }
    
    public function create7(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw7() );
    }
    
    public function create8(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw8() );
    }
    
    public function create9(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRaw9() );
    }
    
    public function createDefault(): ExceptionInterface
    {
        return $this->exception_factory->create( $this->createRawDefault() );
    }

    public function createRaw0(): string
    {
        return "Exception Number 0";
    }
    
    public function createRaw1(): string
    {
        return "Exception Number 1";
    }
    
    public function createRaw2(): string
    {
        return "Exception Number 2";
    }

    public function createRaw3(): string
    {
        return "Exception Number 3";
    }  
    
    public function createRaw4(): string
    {
        return "Exception Number 4";
    }  
    
    public function createRaw5(): string
    {
        return "Exception Number 5";
    }    

    public function createRaw6(): string
    {
        return "Exception Number 6";
    }   
    
    public function createRaw7(): string
    {
        return "Exception Number 7";
    } 
    
    public function createRaw8(): string
    {
        return "Exception Number 8";
    }   
    
    public function createRaw9(): string
    {
        return "Exception Number 9";
    }  
    
    public function createRawDefault(): string
    {
        return $this->createRaw0();
    }      
}