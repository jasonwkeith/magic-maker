<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;

trait ExceptionFactoryHelperTrait
{
    public function createExceptionFactory() : ExceptionFactoryInterface
    {
        return new ExceptionFactory;
    }
}


