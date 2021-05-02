<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\MarkupTag\MarkupTagFactoryInterface;
use JasonWKeith\Persistance\DataObject\MarkupTag\MarkupTagMapperInterface;

class ContentMapperFactory implements ContentMapperFactoryInterface
{
    public function __construct( ContentFactoryInterface $entity_factory, ContentDataObjectFactoryInterface $data_object_factory )
    {
        $this->entity_factory = $entity_factory;
        $this->data_object_factory = $data_object_factory;
    }

    public function create(): ContentMapperInterface
    {
        return new ContentMapper( $this->entity_factory, $this->data_object_factory );
    }
}