<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\DateTime;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;

interface DateTimeMapperFactoryInterface
{
    public function __construct( DateTimeFactoryInterface $entity_factory, DateTimeDataObjectFactoryInterface $data_object_factory );
    public function create(): DateTimeMapperInterface;
}