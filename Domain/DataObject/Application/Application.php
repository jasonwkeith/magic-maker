<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\GUID\GUIDTrait;

class Application implements ApplicationInterface
{
    use GUIDTrait;

    public function __construct( ExceptionFactoryInterface $exception_factory, string $guid, string $name )
    {
        $this->setExceptionFactory( $exception_factory );       
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