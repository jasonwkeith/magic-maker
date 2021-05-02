<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class PersonCollection implements PersonCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory, ?PersonInterface ...$persons )
    {
        $this->exception_factory = $exception_factory;
        $this->setCollection( $persons );
    }
}