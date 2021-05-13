<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Datetime;

use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Datetime\DatetimeFactoryInterface;

interface DatetimeMapperFactoryInterface
{
    public function __construct( DatetimeFactoryInterface $entity_factory, DatetimeDataObjectFactoryInterface $data_object_factory );
    public function create(): DatetimeMapperInterface;
}