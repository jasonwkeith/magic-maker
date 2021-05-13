<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

interface ContentMapperFactoryInterface
{
    public function __construct( ContentFactoryInterface $entity_factory, ContentDataObjectFactoryInterface $data_object_factory, HistoryMapperInterface $history_mapper );
    public function create(): ContentMapperInterface;
}