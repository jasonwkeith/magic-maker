<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;

class ApplicationMapperFactory implements ApplicationMapperFactoryInterface
{
    public function __construct( ApplicationFactoryInterface $entity_factory, ApplicationDataObjectFactoryInterface $data_object_factory )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
    }

    public function create(): ApplicationMapperInterface
    {
        return new ApplicationMapper( $this->entity_factory, $this->data_object_factory );
    }
}