<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Collection\CollectionTrait;

class UserCollection implements UserCollectionInterface, \IteratorAggregate
{
    use CollectionTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory, ?UserInterface ...$Users )
    {
        $this->exception_factory = $exception_factory;
        $this->setCollection( $Users );
    }
}