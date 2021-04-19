<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure;

use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIInterface;
use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIFactory;

trait TestDataAPIHelperTrait
{
    use ExceptionFactoryHelperTrait;
    use DataObjectAPIHelperTrait;
    
    private function createTestDataAPI() : TestDataAPIInterface
    {
        $this->test_data_api_factory = new TestDataAPIFactory( $this->createExceptionFactory(), $this->createDataObjectAPI() );
        return $this->test_data_api_factory->create();
    }
}


