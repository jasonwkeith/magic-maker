<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure;

use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIFactory;
use JasonWKeith\Domain\Interactor\DataObjectAPI\DataObjectAPIInterface;

trait DataObjectAPIHelperTrait
{
    use ExceptionFactoryHelperTrait;
    
    public function createDataObjectAPI() : DataObjectAPIInterface
    {
        $factory = new DataObjectAPIFactory( $this->createExceptionFactory() );
        return $factory->create();
    }
}


