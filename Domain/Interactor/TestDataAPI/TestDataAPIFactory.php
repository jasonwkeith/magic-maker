<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionTestDataFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIInterface;
use JasonWKeith\Domain\DataObject\Book\BookTestDataFactory;
use JasonWKeith\Domain\DataObject\Person\PersonTestDataFactory;

class TestDataAPIFactory implements TestDataAPIFactoryInterface
{
    public function __construct
    ( 
        ExceptionFactoryInterface $exception_factory,
        DataObjectAPIInterface $data_object_api
    )
    {
        $this->exception_factory = $exception_factory;
        $this->data_object_api = $data_object_api;
    }

    public function create(): TestDataAPIInterface
    {
        $person_test_data_factory = new PersonTestDataFactory( $this->data_object_api->createPersonFactory() );
        return new TestDataAPI
        (
            new ExceptionTestDataFactory( $this->exception_factory ), 
            new BookTestDataFactory( $this->data_object_api->createBookFactory(), $person_test_data_factory ), 
            $person_test_data_factory 
        );
    }  
}