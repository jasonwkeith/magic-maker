<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Application\Boundary\Persistance\Content\ContentRepositoryInterface;

class ContentRepositoryFactory implements ContentRepositoryFactoryInterface
{
    public function __construct( ContentPersisterInterface $persister, ContentMapperInterface $content_mapper )
    {
        $this->persister = $persister;
        $this->content_mapper = $content_mapper;
    }
    
    public function create(): ContentRepositoryInterface
    {
        return new ContentRepository( $this->persister, $this->content_mapper );
    }
}