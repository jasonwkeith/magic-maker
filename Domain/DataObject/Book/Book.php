<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Infrastructure\DataObject\DataObjectTrait;

class Book implements BookInterface
{
    use DataObjectTrait;

    public function __construct( ExceptionFactoryInterface $exception_factory, string $guid, HistoryInterface $history, PersonCollectionInterface $authors, int $year, string $title, string $subtitle )
    {
        $this->setExceptionFactory( $exception_factory );        
        $this->setGUID( $guid );
        $this->setHistory( $history );          
        $this->setAuthors( $authors );
        $this->setPublishedYear( $year );
        $this->setTitle( $title );
        $this->setSubtitle( $subtitle );
    }

    public function getAuthors(): PersonCollectionInterface
    {
        return $this->authors;
    }

    public function getPublishedYear(): int
    {
        return $this->published_year;
    }    
    
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }  

    private function setAuthors( PersonCollectionInterface $authors )
    {
        $this->authors = $authors;
    }
    
    private function setPublishedYear( int $year )
    {
        $this->published_year = $year;
    }
    
    private function setSubtitle( string $subtitle ): void
    {
        $this->subtitle = $subtitle;
    }
    
    private function setTitle( string $title ): void
    {
        $this->title = $title;
    }
}