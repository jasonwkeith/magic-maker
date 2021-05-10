<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain;

use JasonWKeith\Domain\Boundary\APIInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIInterface;
use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class API implements APIInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory, DataObjectAPIInterface $data_object_api, TestDataAPIInterface $test_data_api )
    {
        $this->exception_factory = $exception_factory;
        $this->data_object_api = $data_object_api;
        $this->test_data_api = $test_data_api;
    }
    
    public function createApplicationFactory(): ApplicationFactoryInterface
    {
        return $this->data_object_api->createApplicationFactory();
    }      
    
    public function createApplicationTestDataFactory(): ApplicationTestDataFactoryInterface
    {
        return $this->test_data_api->createApplicationTestDataFactory();
    }     
    
    public function createBookFactory(): BookFactoryInterface
    {
        return $this->data_object_api->createBookFactory();
    }  
    
    public function createBookTestDataFactory(): BookTestDataFactoryInterface
    {
        return $this->test_data_api->createBookTestDataFactory();
    } 

    public function createContentFactory(): ContentFactoryInterface
    {
        return $this->data_object_api->createContentFactory();
    }      
    
    public function createContentTestDataFactory(): ContentTestDataFactoryInterface
    {
        return $this->test_data_api->createContentTestDataFactory();
    } 
    
    public function createDateTimeFactory(): DateTimeFactoryInterface
    {
        return $this->data_object_api->createDateTimeFactory();
    }      
    
    public function createDateTimeTestDataFactory(): DateTimeTestDataFactoryInterface
    {
        return $this->test_data_api->createDateTimeTestDataFactory();
    }    
    
    public function createExceptionFactory(): ExceptionFactoryInterface
    {
        return $this->exception_factory;
    }    

    public function createExceptionTestDataFactory(): ExceptionTestDataFactoryInterface
    {
        return $this->test_data_api->createExceptionTestDataFactory();
    }
    
    public function createHistoryFactory(): HistoryFactoryInterface
    {
        return $this->data_object_api->createHistoryFactory();
    }     

    public function createHistoryTestDataFactory(): HistoryTestDataFactoryInterface
    {
        return $this->test_data_api->createHistoryTestDataFactory();
    }     

    public function createPersonFactory(): PersonFactoryInterface
    {
        return $this->data_object_api->createPersonFactory();
    }     

    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface
    {
        return $this->test_data_api->createPersonTestDataFactory();
    } 

    public function createUserFactory(): UserFactoryInterface
    {
        return $this->data_object_api->createUserFactory();
    }      
    
    public function createUserTestDataFactory(): UserTestDataFactoryInterface
    {
        return $this->test_data_api->createUserTestDataFactory();
    }     
}