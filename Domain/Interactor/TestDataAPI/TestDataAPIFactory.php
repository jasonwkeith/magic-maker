<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionTestDataFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIInterface;
use JasonWKeith\Domain\DataObject\Application\ApplicationTestDataFactory;
use JasonWKeith\Domain\DataObject\Book\BookTestDataFactory;
use JasonWKeith\Domain\DataObject\Content\ContentTestDataFactory;
use JasonWKeith\Domain\DataObject\Person\PersonTestDataFactory;
use JasonWKeith\Domain\DataObject\User\UserTestDataFactory;
use JasonWKeith\Domain\Infrastructure\DateTime\DateTimeTestDataFactory;
use JasonWKeith\Domain\Infrastructure\History\HistoryTestDataFactory;

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
        $application_test_data_factory = new ApplicationTestDataFactory( $this->data_object_api->createApplicationFactory() );
        $date_time_test_data_factory = new DateTimeTestDataFactory($this->data_object_api->createDateTimeFactory() );
        $person_test_data_factory = new PersonTestDataFactory( $this->data_object_api->createPersonFactory() );        
        $user_test_data_factory = new UserTestDataFactory( $this->data_object_api->createUserFactory(), $application_test_data_factory,$person_test_data_factory );
        return new TestDataAPI
        (
            new ExceptionTestDataFactory( $this->exception_factory ), 
            $application_test_data_factory,             
            new BookTestDataFactory( $this->data_object_api->createBookFactory(), $person_test_data_factory ), 
            new ContentTestDataFactory( $this->data_object_api->createContentFactory() ),
            $date_time_test_data_factory,
            new HistoryTestDataFactory($this->data_object_api->createHistoryFactory(), $date_time_test_data_factory, $user_test_data_factory ),            
            $person_test_data_factory,
            $user_test_data_factory
        );
    }  
}