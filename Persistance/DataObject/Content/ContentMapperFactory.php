<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryMapperInterface;

class ContentMapperFactory implements ContentMapperFactoryInterface
{
    public function __construct( ContentFactoryInterface $entity_factory, ContentDataObjectFactoryInterface $data_object_factory, HistoryMapperInterface $history_mapper )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
        $this->history_mapper = $history_mapper;
    }

    public function create(): ContentMapperInterface
    {
        return new ContentMapper( $this->entity_factory, $this->data_object_factory, $this->history_mapper );
    }
}