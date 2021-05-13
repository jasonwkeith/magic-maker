<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

interface PersonMapperFactoryInterface
{
    public function __construct( PersonFactoryInterface $person_factory, PersonDataObjectFactoryInterface $person_data_object_factory, HistoryMapperInterface $history_mapper  );
    public function create(): PersonMapperInterface;
}