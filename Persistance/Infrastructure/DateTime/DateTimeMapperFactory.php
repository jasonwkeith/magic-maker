<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;

class DateTimeMapperFactory implements DateTimeMapperFactoryInterface
{
    public function __construct( DateTimeFactoryInterface $entity_factory, DateTimeDataObjectFactoryInterface $data_object_factory )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
    }

    public function create(): DateTimeMapperInterface
    {
        return new DateTimeMapper( $this->entity_factory, $this->data_object_factory );
    }
}