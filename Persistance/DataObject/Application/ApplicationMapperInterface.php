<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

interface ApplicationMapperInterface
{
    public function __construct( ApplicationFactoryInterface $application_factory, ApplicationDataObjectFactoryInterface $application_data_object_factory, HistoryMapperInterface $history_mapper );
    public function createDataObject( ApplicationInterface $application ): ApplicationDataObject;
    public function createEntity( ApplicationDataObjectInterface $data_object ): ApplicationInterface;
    public function createEntityCollection( ApplicationDataObjectCollectionInterface $data_objects ): ApplicationCollectionInterface;    
}