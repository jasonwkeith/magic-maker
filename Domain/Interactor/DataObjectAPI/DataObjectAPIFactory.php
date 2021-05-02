<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\DataObjectAPI;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\DataObject\Application\ApplicationFactory;
use JasonWKeith\Domain\DataObject\Book\BookFactory;
use JasonWKeith\Domain\DataObject\Content\ContentFactory;
use JasonWKeith\Domain\DataObject\Person\PersonFactory;
use JasonWKeith\Domain\DataObject\User\UserFactory;
use JasonWKeith\Domain\Infrastructure\DateTime\DateTimeFactory;
use JasonWKeith\Domain\Infrastructure\History\HistoryFactory;

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
        return new DataObjectAPI
        ( 
            new ApplicationFactory( $this->exception_factory ),
            new BookFactory( $this->exception_factory), 
            new ContentFactory( $this->exception_factory ),
            new DateTimeFactory( $this->exception_factory),
            new HistoryFactory( $this->exception_factory),
            new PersonFactory( $this->exception_factory ), 
            new UserFactory( $this->exception_factory )
        );
    }  
}