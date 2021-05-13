<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Infrastructure\DataObject\DataObjectTrait;

class Content implements ContentInterface
{
    use DataObjectTrait;

    public function __construct
    ( 
        ExceptionFactoryInterface $exception_factory, 
        string $guid, 
        HistoryInterface $history, 
        string $text 
    )
    {
        $this->setExceptionFactory( $exception_factory );        
        $this->setGUID( $guid );
        $this->setHistory( $history );        
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }      
}