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
        $this->entity_factory = $content_factory;
        $this->data_object_factory = $content_data_object_factory;
    }

    public function createDataObject( ContentInterface $entity ): ContentDataObject
    {
        return $this->data_object_factory->create( $entity->getGUID(), $entity->getText() );
    }
    
    public function createEntity( ContentDataObjectInterface $data_object ): ContentInterface
    {
        $data_transfer_object = $this->entity_factory->createDataTransferObject();
        $data_transfer_object->guid = $data_object->getGUID();
        $data_transfer_object->text = $data_object->getText();
        
        return $this->entity_factory->create( $data_transfer_object );
    }
    
    public function createEntityCollection( ContentDataObjectCollectionInterface $data_objects ): ContentCollectionInterface
    {
        $entities = array();
        foreach( $data_objects as $data_object )
        {
            array_push( $entities, $this->createEntity( $data_object ) );
        }   
        return $this->entity_factory->createCollection( ...$entities );
    }     
}