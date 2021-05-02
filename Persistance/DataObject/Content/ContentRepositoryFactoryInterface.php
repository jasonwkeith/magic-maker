<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Application\Boundary\Persistance\Content\ContentRepositoryInterface;

interface ContentRepositoryFactoryInterface
{
    public function __construct( ContentPersisterInterface $persister, ContentMapperInterface $content_mapper );
    public function create(): ContentRepositoryInterface;
}