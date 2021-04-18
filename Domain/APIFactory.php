<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain;

use JasonWKeith\Domain\Boundary\APIFactoryInterface;
use JasonWKeith\Domain\Boundary\APIInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIFactory;
use JasonWKeith\Domain\Interactor\TestDataAPI\TestDataAPIFactory;

class APIFactory implements APIFactoryInterface
{
    public function __construct()
    {
        $this->exception_factory = new ExceptionFactory();
        $this->data_object_api_factory = new DataObjectAPIFactory( $this->exception_factory );
        $this->test_data_api_factory = new TestDataAPIFactory( $this->exception_factory, $this->data_object_api_factory->create() );    
    }
    
    public function create(): APIInterface
    {
        return new API( $this->exception_factory, $this->data_object_api_factory->create(), $this->test_data_api_factory->create() );
    }
}