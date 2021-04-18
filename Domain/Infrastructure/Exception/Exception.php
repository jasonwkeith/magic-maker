<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\Exception;

use \Exception as StandardException;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;

class Exception extends StandardException implements ExceptionInterface
{
}