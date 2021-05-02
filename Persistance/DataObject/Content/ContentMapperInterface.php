<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;

interface ContentMapperInterface
{
    public function __construct( ContentFactoryInterface $content_factory, ContentDataObjectFactoryInterface $content_data_object_factory );
    public function createDataObject( ContentInterface $content ): ContentDataObject;
    public function createEntity( ContentDataObjectInterface $data_object ): ContentInterface;
    public function createEntityCollection( ContentDataObjectCollectionInterface $data_objects ): ContentCollectionInterface;    
}