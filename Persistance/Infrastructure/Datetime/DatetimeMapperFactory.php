<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Datetime;

use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeFactoryInterface;

class DatetimeMapperFactory implements DatetimeMapperFactoryInterface
{
    public function __construct( DatetimeFactoryInterface $entity_factory, DatetimeDataObjectFactoryInterface $data_object_factory )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
    }

    public function create(): DatetimeMapperInterface
    {
        return new DatetimeMapper( $this->entity_factory, $this->data_object_factory );
    }
}