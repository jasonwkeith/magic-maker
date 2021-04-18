<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\DataObjectAPI;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;

class DataObjectAPI implements DataObjectAPIInterface
{
    public function __construct
    ( 
        BookFactoryInterface $book_factory, 
        PersonFactoryInterface $person_factory
    )
    {
        $this->person_factory = $person_factory;
        $this->book_factory = $book_factory;
    }

    public function createBook(  string $guid, PersonCollectionInterface $authors, int $year, string $title, string $subtitle ): BookInterface
    {
        return $this->book_factory->create( $guid, $authors, $year, $title, $subtitle );
    } 
    
    public function createBookFactory(): BookFactoryInterface
    {
        return $this->book_factory;
    }      

    public function createPerson( string $guid, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd ): PersonInterface
    {
        return $this->person_factory->create( $guid, $first_name, $middle_name, $last_name,  $nickname, $suffix, $has_md, $has_phd );
    } 
    
    public function createPersonFactory(): PersonFactoryInterface
    {
        return $this->person_factory;
    }     
    
    
}