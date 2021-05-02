<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\MarkupTag\MarkupTagInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;

interface ContentInterface extends GUIDInterface
{
    public const TEXT = "text";
    
    public function __construct( ExceptionFactoryInterface $exception_factory, string $guid, string $text );
    public function getText(): string;    
}