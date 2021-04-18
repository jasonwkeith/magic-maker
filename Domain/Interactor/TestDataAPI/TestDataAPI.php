<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;

class TestDataAPI implements TestDataAPIInterface
{
    public function __construct
    ( 
        ExceptionTestDataFactoryInterface $exception_test_data_factory,
        BookTestDataFactoryInterface $book_test_data_factory,
        PersonTestDataFactoryInterface $person_test_data_factory
    )
    {
        $this->exception_test_data_factory = $exception_test_data_factory;
        $this->book_test_data_factory =  $book_test_data_factory;
        $this->person_test_data_factory =  $person_test_data_factory;
    }

    public function createBookTestDataFactory(): BookTestDataFactoryInterface
    {
        return $this->book_test_data_factory;
    }  

    public function createExceptionTestDataFactory(): ExceptionTestDataFactoryInterface
    {
        return $this->exception_test_data_factory;
    }    
    
    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface
    {
        return $this->person_test_data_factory;
    } 
}