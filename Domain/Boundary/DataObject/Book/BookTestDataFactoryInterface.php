<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

interface BookTestDataFactoryInterface
{
    public function __construct( BookFactoryInterface $book_factory, BookRawTestDataFactoryInterface $book_test_data_factory );
    public function create( int $number ): BookInterface;
    public function createArray( int $number ): array;
    public function createDefault(): BookInterface;
    public function createCollection( int $number ): BookCollectionInterface;
    public function createRaw( int $number ): BookDataTransferObject;
    public function createRawDefault(): BookDataTransferObject;
    public function createRawWithSubtitle(): BookDataTransferObject;
    public function createRawWithoutSubtitle(): BookDataTransferObject;
    public function createRawMultipleAuthors(): BookDataTransferObject;
    public function createWithSubtitle(): BookInterface;
    public function createWithoutSubtitle(): BookInterface;
    public function createMultipleAuthors(): BookInterface;
}