<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\APIFactory as DomainAPIFactory;
use JasonWKeith\Domain\Infrastructure\TestDataAPIHelperTrait;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Persistance\APIFactory;
use JasonWKeith\Persistance\Infrastructure\TestConstants;
use JasonWKeith\Persistance\Infrastructure\Repository\RepositoryTestTrait;

class BookRepositoryTest extends TestCase
{
    use TestDataAPIHelperTrait;
    use RepositoryTestTrait;
    
    protected function setUp(): void
    {
        $this->domain_api_factory = new DomainAPIFactory;
        $this->domain_api = $this->domain_api_factory->create();
        
        $this->data_object_api = $this->createDataObjectAPI();
        $this->test_data_api = $this->createTestDataAPI();
        $this->test_data_factory = $this->test_data_api->createBookTestDataFactory();
        
        $this->api_factory = new APIFactory( TestConstants::STORAGE_PATH, TestConstants::STORAGE_EXTENSION, $this->domain_api );
        $this->api = $this->api_factory->create();

        $this->system_under_test = $this->api->createBookRepository();
    }
}
