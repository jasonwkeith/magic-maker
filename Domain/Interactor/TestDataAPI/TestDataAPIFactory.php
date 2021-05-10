<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionTestDataFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIInterface;
use JasonWKeith\Domain\DataObject\Application\ApplicationRawTestDataFactory;
use JasonWKeith\Domain\DataObject\Application\ApplicationTestDataFactory;
use JasonWKeith\Domain\DataObject\Book\BookTestDataFactory;
use JasonWKeith\Domain\DataObject\Book\BookRawTestDataFactory;
use JasonWKeith\Domain\DataObject\Content\ContentRawTestDataFactory;
use JasonWKeith\Domain\DataObject\Content\ContentTestDataFactory;
use JasonWKeith\Domain\DataObject\Person\PersonTestDataFactory;
use JasonWKeith\Domain\DataObject\Person\PersonRawTestDataFactory;
use JasonWKeith\Domain\DataObject\User\UserRawTestDataFactory;
use JasonWKeith\Domain\DataObject\User\UserTestDataFactory;
use JasonWKeith\Domain\Infrastructure\DateTime\DateTimeRawTestDataFactory;
use JasonWKeith\Domain\Infrastructure\DateTime\DateTimeTestDataFactory;
use JasonWKeith\Domain\Infrastructure\History\HistoryTestDataFactory;
use JasonWKeith\Domain\Infrastructure\History\HistoryRawTestDataFactory;

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
        $date_time_test_data_factory = new DateTimeTestDataFactory( $this->data_object_api->createDateTimeFactory(), new DateTimeRawTestDataFactory );
        $history_raw_test_data_factory = new HistoryRawTestDataFactory( $date_time_test_data_factory );
        $history_test_data_factory = new HistoryTestDataFactory( $this->data_object_api->createHistoryFactory(), $history_raw_test_data_factory );

        $application_test_data_factory = new ApplicationTestDataFactory( $this->data_object_api->createApplicationFactory(), new ApplicationRawTestDataFactory( $this->data_object_api->createApplicationFactory(), $history_test_data_factory ) );
        $person_test_data_factory = new PersonTestDataFactory( $this->data_object_api->createPersonFactory(), new PersonRawTestDataFactory );        
        $book_raw_test_data_factory = new BookRawTestDataFactory( $this->data_object_api->createBookFactory(), $person_test_data_factory );
        $user_raw_test_data_factory = new UserRawTestDataFactory( $this->data_object_api->createUserFactory(), $application_test_data_factory, $person_test_data_factory );
        $user_test_data_factory = new UserTestDataFactory( $this->data_object_api->createUserFactory(), $user_raw_test_data_factory );

        return new TestDataAPI
        (
            new ExceptionTestDataFactory( $this->exception_factory ), 
            $application_test_data_factory,             
            new BookTestDataFactory( $this->data_object_api->createBookFactory(), $book_raw_test_data_factory ), 
            new ContentTestDataFactory( $this->data_object_api->createContentFactory(), new ContentRawTestDataFactory( $this->data_object_api->createContentFactory() ) ),
            $date_time_test_data_factory,
            $history_test_data_factory,            
            $person_test_data_factory,
            $user_test_data_factory
        );
    }  
}