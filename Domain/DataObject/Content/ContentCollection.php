<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class ContentCollection implements ContentCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory, ?ContentInterface ...$Contents )
    {
        $this->exception_factory = $exception_factory;
        $this->setCollection( $Contents );
    }
}