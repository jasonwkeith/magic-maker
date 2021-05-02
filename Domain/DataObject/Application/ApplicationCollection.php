<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class ApplicationCollection implements ApplicationCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory, ?ApplicationInterface ...$Applications )
    {
        $this->exception_factory = $exception_factory;
        $this->setCollection( $Applications );
    }
}