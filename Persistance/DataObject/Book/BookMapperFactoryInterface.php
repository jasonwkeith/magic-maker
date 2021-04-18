<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;

interface BookMapperFactoryInterface
{
    public function __construct( BookFactoryInterface $entity_factory, BookDataObjectFactoryInterface $data_object_factory, PersonRepositoryInterface $person_repository );
    public function create(): BookMapperInterface;
}