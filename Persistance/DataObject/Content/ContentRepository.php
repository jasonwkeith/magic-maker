<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Application\Boundary\Persistance\Content\ContentRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentCollectionInterface;
use JasonWKeith\Persistance\Infrastructure\Repository\RepositoryTrait;

class ContentRepository implements ContentRepositoryInterface
{
    use RepositoryTrait;
    
    public function __construct( ContentPersisterInterface $persister, ContentMapperInterface $mapper )
    {
        $this->persister = $persister;
        $this->mapper = $mapper;
    } 
    
    public function add(  ContentInterface $content ): void
    {
        $data_object = $this->mapper->createDataObject( $content );
        $this->persister->write( $data_object );
    }

    public function get( string $guid ): ContentInterface
    {
        $data_object = $this->persister->read( $guid );
        return $this->mapper->createEntity( $data_object );
    }   
    
    public function getCollection( array $guids ): ContentCollectionInterface
    {
        $data_objects = $this->persister->readCollection( $guids );        
        return $this->mapper->createEntityCollection( $data_objects );
    }
}