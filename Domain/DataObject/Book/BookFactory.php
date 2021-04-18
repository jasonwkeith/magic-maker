<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

class BookFactory implements BookFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->exception_factory = $exception_factory;
    }
    
    public function create( string $guid, PersonCollectionInterface $authors, int $year, string $title, string $subtitle ): BookInterface
    {
        return new Book( $this->exception_factory, $guid, $authors, $year, $title, $subtitle );
    }
    
    public function createCollection( BookInterface ...$books ): BookCollectionInterface
    {
        return new BookCollection( $this->exception_factory, ...$books );
    }    
    
    public function createDTO(): array
    {
        $dto = array();
        $dto[ BookInterface::GUID ] ="";
        $dto[ BookInterface::AUTHORS ] = "";
        $dto[ BookInterface::PUBLISHED_YEAR ] =0;
        $dto[ BookInterface::SUBTITLE ] = "";
        $dto[ BookInterface::TITLE ] ="";

        return $dto;
    }    
}