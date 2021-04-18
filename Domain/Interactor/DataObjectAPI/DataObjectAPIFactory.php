<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\DataObjectAPI;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\DataObject\Book\BookFactory;
use JasonWKeith\Domain\DataObject\Person\PersonFactory;

class DataObjectAPIFactory implements DataObjectAPIFactoryInterface
{
    public function __construct
    ( 
        ExceptionFactoryInterface $exception_factory
    )
    {
        $this->exception_factory = $exception_factory;
    }

    public function create(): DataObjectAPIInterface
    {
        return new DataObjectAPI( new BookFactory( $this->exception_factory), new PersonFactory( $this->exception_factory ) );
    }  
}