<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;

interface PersonRepositoryFactoryInterface
{
    public function __construct( PersonPersisterInterface $persister, PersonMapperInterface $mapper );
    public function create(): PersonRepositoryInterface;
}