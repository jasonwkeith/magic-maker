<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

class TestDataAPI implements TestDataAPIInterface
{
    public function __construct
    ( 
        ExceptionTestDataFactoryInterface $exception_test_data_factory,
        ApplicationTestDataFactoryInterface $application_test_data_factory,
        BookTestDataFactoryInterface $book_test_data_factory,
        ContentTestDataFactoryInterface $content_test_data_factory,
        DateTimeTestDataFactoryInterface $date_time_test_data_factory,        
        HistoryTestDataFactoryInterface $history_test_data_factory,          
        PersonTestDataFactoryInterface $person_test_data_factory,
        UserTestDataFactoryInterface $user_test_data_factory            
    )
    {
        $this->exception_test_data_factory = $exception_test_data_factory;
        $this->application_test_data_factory =  $application_test_data_factory;
        $this->book_test_data_factory =  $book_test_data_factory;
        $this->content_test_data_factory =  $content_test_data_factory;  
        $this->date_time_test_data_factory = $date_time_test_data_factory;
        $this->history_test_data_factory = $history_test_data_factory;
        $this->person_test_data_factory =  $person_test_data_factory;
        $this->user_test_data_factory =  $user_test_data_factory;          
    }
    
    public function createApplicationTestDataFactory(): ApplicationTestDataFactoryInterface
    {
        return $this->application_test_data_factory;
    }      

    public function createBookTestDataFactory(): BookTestDataFactoryInterface
    {
        return $this->book_test_data_factory;
    }  
    
    public function createContentTestDataFactory(): ContentTestDataFactoryInterface
    {
        return $this->content_test_data_factory;
    }   

    public function createDateTimeTestDataFactory(): DateTimeTestDataFactoryInterface    
    {
        return $this->date_time_test_data_factory;
    }   
    
    public function createExceptionTestDataFactory(): ExceptionTestDataFactoryInterface
    {
        return $this->exception_test_data_factory;
    }    
    
    public function createHistoryTestDataFactory(): HistoryTestDataFactoryInterface
    {
        return $this->history_test_data_factory;
    }      

    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface
    {
        return $this->person_test_data_factory;
    } 

    public function createUserTestDataFactory(): UserTestDataFactoryInterface
    {
        return $this->user_test_data_factory;
    }       
}