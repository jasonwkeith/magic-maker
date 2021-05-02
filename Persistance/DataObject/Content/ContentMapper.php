<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;

class ContentMapper implements ContentMapperInterface
{
    public function __construct( ContentFactoryInterface $content_factory, ContentDataObjectFactoryInterface $content_data_object_factory )
    {
        $this->content_factory = $content_factory;
        $this->content_data_object_factory = $content_data_object_factory;
    }

    public function createDataObject( ContentInterface $content ): ContentDataObject
    {
        return $this->content_data_object_factory->create( $content->getGUID(), $content->getText() );
    }
    
    public function createEntity( ContentDataObjectInterface $data_object ): ContentInterface
    {
        return $this->content_factory->create( $data_object->getGUID(), $data_object->getText() );
    }
    
    public function createEntityCollection( ContentDataObjectCollectionInterface $data_objects ): ContentCollectionInterface
    {
        $entities = array();
        foreach( $data_objects as $data_object )
        {
            array_push( $entities, $this->content_factory->create( $data_object->getGUID(), $data_object->getText() ) );
        }   
        return $this->content_factory->createCollection( ...$entities );
    }     
}