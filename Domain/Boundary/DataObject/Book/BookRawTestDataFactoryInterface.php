<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;

interface BookRawTestDataFactoryInterface
{
    public function __construct( BookFactoryInterface $book_factory, PersonTestDataFactoryInterface $person_test_data_factory );
    public function create( int $number ): BookDataTransferObject;
    public function createDefault(): BookDataTransferObject;
    public function createRawWithSubtitle(): BookDataTransferObject;
    public function createRawWithoutSubtitle(): BookDataTransferObject;
    public function createRawMultipleAuthors(): BookDataTransferObject;
}