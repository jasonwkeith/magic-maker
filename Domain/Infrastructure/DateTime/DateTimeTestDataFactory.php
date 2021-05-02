<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;

class DateTimeTestDataFactory implements DateTimeTestDataFactoryInterface
{
    public function __construct( DateTimeFactoryInterface $factory )
    {
        $this->factory = $factory;
    }
    
    public function create0(): DateTimeInterface
    {
        return $this->create( $this->createRaw0() );
    }
    
    public function create1(): DateTimeInterface
    {
        return $this->create( $this->createRaw1() );
    }
    
    public function create2(): DateTimeInterface
    {
        return $this->create( $this->createRaw2() );
    }
    
    public function create3(): DateTimeInterface
    {
        return $this->create( $this->createRaw3() );
    }
    
    public function create4(): DateTimeInterface
    {
        return $this->create( $this->createRaw4() );
    }
    
    public function create5(): DateTimeInterface
    {
        return $this->create( $this->createRaw5() );
    }
    
    public function create6(): DateTimeInterface
    {
        return $this->create( $this->createRaw6() );
    }
    
    public function create7(): DateTimeInterface
    {
        return $this->create( $this->createRaw7() );
    }
    
    public function create8(): DateTimeInterface
    {
        return $this->create( $this->createRaw8() );
    }
    
    public function create9(): DateTimeInterface
    {
        return $this->create( $this->createRaw9() );
    }
    
    public function createDefault(): DateTimeInterface
    {
        return $this->create( $this->createRawDefault() );
    }

    public function createRaw0(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 1978;
        $dto[ DateTimeInterface::MONTH ] = 12;
        $dto[ DateTimeInterface::DAY ] = 13;
        $dto[ DateTimeInterface::HOUR ] = 9;
        $dto[ DateTimeInterface::MINUTE ] = 10;
        $dto[ DateTimeInterface::SECOND ] = 31;        
        return $dto;
    }
    
    public function createRaw1(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 2002;
        $dto[ DateTimeInterface::MONTH ] = 12;
        $dto[ DateTimeInterface::DAY ] = 31;
        $dto[ DateTimeInterface::HOUR ] = 0;
        $dto[ DateTimeInterface::MINUTE ] = 0;
        $dto[ DateTimeInterface::SECOND ] = 0;        
        return $dto;
    }
    
    public function createRaw2(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 1987;
        $dto[ DateTimeInterface::MONTH ] = 10;
        $dto[ DateTimeInterface::DAY ] = 20;
        $dto[ DateTimeInterface::HOUR ] = 12;
        $dto[ DateTimeInterface::MINUTE ] = 20;
        $dto[ DateTimeInterface::SECOND ] = 50;        
        return $dto;
    }

    public function createRaw3(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 2017;
        $dto[ DateTimeInterface::MONTH ] = 01;
        $dto[ DateTimeInterface::DAY ] = 12;
        $dto[ DateTimeInterface::HOUR ] = 16;
        $dto[ DateTimeInterface::MINUTE ] = 5;
        $dto[ DateTimeInterface::SECOND ] = 55;        
        return $dto;
    }  
    
    public function createRaw4(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 2013;
        $dto[ DateTimeInterface::MONTH ] = 11;
        $dto[ DateTimeInterface::DAY ] = 11;
        $dto[ DateTimeInterface::HOUR ] = 13;
        $dto[ DateTimeInterface::MINUTE ] = 31;
        $dto[ DateTimeInterface::SECOND ] = 01;        
        return $dto;
    }  
    
    public function createRaw5(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 1999;
        $dto[ DateTimeInterface::MONTH ] = 12;
        $dto[ DateTimeInterface::DAY ] = 31;
        $dto[ DateTimeInterface::HOUR ] = 23;
        $dto[ DateTimeInterface::MINUTE ] = 59;
        $dto[ DateTimeInterface::SECOND ] = 59;        
        return $dto;
    }    

    public function createRaw6(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 2000;
        $dto[ DateTimeInterface::MONTH ] = 1;
        $dto[ DateTimeInterface::DAY ] = 1;
        $dto[ DateTimeInterface::HOUR ] = 00;
        $dto[ DateTimeInterface::MINUTE ] = 00;
        $dto[ DateTimeInterface::SECOND ] = 00;        
        return $dto;
    }   
    
    public function createRaw7(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 1996;
        $dto[ DateTimeInterface::MONTH ] =  05;
        $dto[ DateTimeInterface::DAY ] = 31;
        $dto[ DateTimeInterface::HOUR ] = 12;
        $dto[ DateTimeInterface::MINUTE ] = 00;
        $dto[ DateTimeInterface::SECOND ] = 00;        
        return $dto;
    } 
    
    public function createRaw8(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 1951;
        $dto[ DateTimeInterface::MONTH ] = 7;
        $dto[ DateTimeInterface::DAY ] = 20;
        $dto[ DateTimeInterface::HOUR ] = 13;
        $dto[ DateTimeInterface::MINUTE ] = 49;
        $dto[ DateTimeInterface::SECOND ] = 17;        
        return $dto;
    }   
    
    public function createRaw9(): array
    {
        $dto[ DateTimeInterface::YEAR ] = 2021;
        $dto[ DateTimeInterface::MONTH ] = 04;
        $dto[ DateTimeInterface::DAY ] = 28;
        $dto[ DateTimeInterface::HOUR ] = 13;
        $dto[ DateTimeInterface::MINUTE ] = 59;
        $dto[ DateTimeInterface::SECOND ] = 18;        
        return $dto;
    }  
    
    public function createRawDefault(): array
    {
        $dto[ DateTimeInterface::YEAR ] = NULL;
        $dto[ DateTimeInterface::MONTH ] = NULL;
        $dto[ DateTimeInterface::DAY ] = NULL;
        $dto[ DateTimeInterface::HOUR ] = NULL;
        $dto[ DateTimeInterface::MINUTE ] = NULL;
        $dto[ DateTimeInterface::SECOND ] = NULL;        
        return $dto;
    }      
    
    private function create( array $dto ): DateTimeInterface
    {
        return $this->factory->create
        ( 
            $dto[DateTimeInterface::YEAR ],            
            $dto[ DateTimeInterface::MONTH ],
            $dto[ DateTimeInterface::DAY ],
            $dto[ DateTimeInterface::HOUR ],
            $dto[ DateTimeInterface::MINUTE ],
            $dto[ DateTimeInterface::SECOND ],  
        );
    }
}