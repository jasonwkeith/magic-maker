<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Exception;

use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactoryTrait as DomainExceptionFactoryTrait;

trait ExceptionFactoryTrait
{
    use DomainExceptionFactoryTrait;
}