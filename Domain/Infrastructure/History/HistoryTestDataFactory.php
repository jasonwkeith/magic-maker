<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\History;

use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class HistoryTestDataFactory implements HistoryTestDataFactoryInterface
{
    public function __construct( HistoryFactoryInterface $factory, DateTimeTestDataFactoryInterface $date_time_test_data_factory, UserTestDataFactoryInterface $user_test_data_factory )
    {
        $this->factory = $factory;
        $this->date_time_test_data_factory = $date_time_test_data_factory;
        $this->user_test_data_factory = $user_test_data_factory;
    }
    
    public function create0(): HistoryInterface
    {
        return $this->create( $this->createRaw0() );
    }
    
    public function create1(): HistoryInterface
    {
        return $this->create( $this->createRaw1() );
    }
    
    public function create2(): HistoryInterface
    {
        return $this->create( $this->createRaw2() );
    }
    
    public function create3(): HistoryInterface
    {
        return $this->create( $this->createRaw3() );
    }
    
    public function create4(): HistoryInterface
    {
        return $this->create( $this->createRaw4() );
    }
    
    public function create5(): HistoryInterface
    {
        return $this->create( $this->createRaw5() );
    }
    
    public function create6(): HistoryInterface
    {
        return $this->create( $this->createRaw6() );
    }
    
    public function create7(): HistoryInterface
    {
        return $this->create( $this->createRaw7() );
    }
    
    public function create8(): HistoryInterface
    {
        return $this->create( $this->createRaw8() );
    }
    
    public function create9(): HistoryInterface
    {
        return $this->create( $this->createRaw9() );
    }
    
    public function createDefault(): HistoryInterface
    {
        return $this->create( $this->createRawDefault() );
    }

    public function createRaw0(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create0();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create0()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create1();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create1()->getGUID();
        return $dto;
    }
    
    public function createRaw1(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create1();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create1()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create2();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create2()->getGUID();
        return $dto;
    }
    
    public function createRaw2(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create2();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create2()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create3();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create3()->getGUID();
        return $dto;
    }

    public function createRaw3(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create3();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create3()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create4();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create4()->getGUID();
        return $dto;
    }  
    
    public function createRaw4(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create4();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create4()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create5();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create5()->getGUID();
        return $dto;
    }  
    
    public function createRaw5(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create5();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create5()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create6();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create6()->getGUID();
        return $dto;
    }    

    public function createRaw6(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create6();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create6()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create7();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create7()->getGUID();
        return $dto;
    }   
    
    public function createRaw7(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create7();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create7()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create8();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create8()->getGUID();
        return $dto;
    } 
    
    public function createRaw8(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create8();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create8()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create9();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create9()->getGUID();
        return $dto;
    }   
    
    public function createRaw9(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create9();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create9()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create0();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create0()->getGUID();
        return $dto;
    }  
    
    public function createRawDefault(): array
    {
        $dto[ HistoryInterface::CREATED_DATE ] = $this->date_time_test_data_factory->create0();
        $dto[ HistoryInterface::CREATED_BY ] = $this->user_test_data_factory->create0()->getGUID();
        $dto[ HistoryInterface::UPDATED_DATE ] = $this->date_time_test_data_factory->create0();
        $dto[ HistoryInterface::UPDATED_BY ] = $this->user_test_data_factory->create0()->getGUID();
        return $dto;
    }      
    
    private function create( array $dto ): HistoryInterface
    {
        return $this->factory->create
        ( 
            $dto[ HistoryInterface::CREATED_DATE ],            
            $dto[ HistoryInterface::CREATED_BY ],
            $dto[ HistoryInterface::UPDATED_DATE ],
            $dto[ HistoryInterface::UPDATED_BY ]
        );
    }
}