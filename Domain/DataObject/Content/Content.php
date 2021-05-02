<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTrait;

class Content implements ContentInterface
{
    use GUIDTrait;

    public function __construct( ExceptionFactoryInterface $exception_factory, string $guid, string $text )
    {
        $this->setExceptionFactory( $exception_factory );        
        $this->setGUID( $guid );
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }      
}