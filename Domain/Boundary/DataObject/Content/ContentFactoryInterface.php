<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

interface ContentFactoryInterface
{
    public function create( ContentDataTransferObject $content_data_transfer_object ): ContentInterface;
    public function createCollection( ContentInterface ...$contents ): ContentCollectionInterface;
    public function createDataTransferObject(): ContentDataTransferObject;    
    public function createEmptyCollection(): ContentCollectionInterface;    
}