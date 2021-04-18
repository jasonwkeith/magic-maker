<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\Exception;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Rfc4122\Validator;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

trait ExceptionFactoryTrait
{
    private function createException( string $message ): ExceptionInterface
    {
        return $this->_exception_factory_trait->create( $message );
    }
    
    private function getExceptionFactory(): ExceptionFactoryInterface
    {
        return $this->_exception_factory_trait;
    }    
    
    private function setExceptionFactory( ExceptionFactoryInterface $exception_factory ): void
    {
        $this->_exception_factory_trait = $exception_factory;
    }
}