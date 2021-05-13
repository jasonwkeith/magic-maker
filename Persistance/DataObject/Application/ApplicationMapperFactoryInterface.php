<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

interface ApplicationMapperFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $entity_factory, ApplicationDataObjectFactoryInterface $data_object_factory, HistoryMapperInterface $history_mapper );
    public function create(): ApplicationMapperInterface;
}