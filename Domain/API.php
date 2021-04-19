<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain;

use JasonWKeith\Domain\Boundary\APIInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIInterface;
use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIInterface;

class API implements APIInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory, DataObjectAPIInterface $data_object_api, TestDataAPIInterface $test_data_api )
    {
        $this->exception_factory = $exception_factory;
        $this->data_object_api = $data_object_api;
        $this->test_data_api = $test_data_api;
    }
    
    public function createBookFactory(): BookFactoryInterface
    {
        return $this->data_object_api->createBookFactory();
    }  
    
    public function createBookTestDataFactory(): BookTestDataFactoryInterface
    {
        return $this->test_data_api->createBookTestDataFactory();
    } 
    
    public function createExceptionFactory(): ExceptionFactoryInterface
    {
        return $this->exception_factory;
    }    

    public function createExceptionTestDataFactory(): ExceptionTestDataFactoryInterface
    {
        return $this->test_data_api->createExceptionTestDataFactory();
    }

    public function createPersonFactory(): PersonFactoryInterface
    {
        return $this->data_object_api->createPersonFactory();
    }     

    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface
    {
        return $this->test_data_api->createPersonTestDataFactory();
    } 
}