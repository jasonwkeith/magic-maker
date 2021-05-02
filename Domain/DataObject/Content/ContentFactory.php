<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\MarkupTag\MarkupTagInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class ContentFactory implements ContentFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;
    }
    
    public function create( string $guid, string $text ): ContentInterface
    {
        return new Content( $this->exception_factory, $guid, $text );
    }
    
    public function createCollection( ContentInterface ...$Contents ): ContentCollectionInterface
    {
        return new ContentCollection( $this->exception_factory, ...$Contents );
    }  
    
    public function createEmptyCollection(): ContentCollectionInterface
    {
        return new ContentCollection( $this->exception_factory, null );
    }
    
    public function createDTO(): array
    {
        $dto = array();
        $dto[ ContentInterface::GUID ] ="";
        $dto[ ContentInterface::TEXT ] = "";

        return $dto;
    }    
}