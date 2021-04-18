<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class BookCollection implements BookCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory, BookInterface ...$books )
    {
        $this->exception_factory = $exception_factory;
        $this->setCollection( $books );
    }
}