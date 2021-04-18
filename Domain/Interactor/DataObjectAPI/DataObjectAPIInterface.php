<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\DataObjectAPI;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;

interface DataObjectAPIInterface
{
    public function createBook( string $guid, PersonCollectionInterface $authors, int $year, string $title, string $subtitle ): BookInterface;
    public function createBookFactory(): BookFactoryInterface;    
    public function createPerson( string $guid, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd ): PersonInterface;
    public function createPersonFactory(): PersonFactoryInterface;    
}