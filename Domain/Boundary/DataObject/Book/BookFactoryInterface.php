<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

interface BookFactoryInterface
{
    public function create( BookDataTransferObject $book_data_transfer_object ): BookInterface;
    public function createCollection( BookInterface ...$books ): BookCollectionInterface;
    public function createDataTransferObject(): BookDataTransferObject;
    public function createEmptyCollection(): BookCollectionInterface;    
}