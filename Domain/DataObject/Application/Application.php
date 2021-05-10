<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Infrastructure\DataObject\DataObjectTrait;

class Application implements ApplicationInterface
{
    use DataObjectTrait;

    public function __construct( ExceptionFactoryInterface $exception_factory, HistoryInterface $history, string $guid, string $name )
    {
        $this->setExceptionFactory( $exception_factory );       
        $this->setHistory( $history );
        $this->setGUID( $guid );        
        $this->setName( $name );
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setName( string $name ): void
    {
        $this->name = $name;
    }
}