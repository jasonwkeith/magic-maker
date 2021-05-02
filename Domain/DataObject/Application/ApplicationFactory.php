<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class ApplicationFactory implements ApplicationFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;
    }
    
    public function create( string $guid, string $name ): ApplicationInterface
    {
        return new Application( $this->exception_factory, $guid, $name );
    }
    
    public function createCollection( ApplicationInterface ...$Applications ): ApplicationCollectionInterface
    {
        return new ApplicationCollection( $this->exception_factory, ...$Applications );
    }    
    
    public function createEmptyCollection(): ApplicationCollectionInterface
    {
        return new ApplicationCollection( $this->exception_factory, null );
    }       
    
    public function createDTO(): array
    {
        $dto = array();
        $dto[ ApplicationInterface::GUID ] ="";
        $dto[ ApplicationInterface::NAME ] = "";

        return $dto;
    }    
}