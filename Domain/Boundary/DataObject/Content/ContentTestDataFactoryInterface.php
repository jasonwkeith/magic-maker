<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

interface ContentTestDataFactoryInterface
{
    public function __construct( ContentFactoryInterface $entity_factory, ContentRawTestDataFactoryInterface $entity_raw_test_data_factory );
    public function create( int $number ): ContentInterface;
    public function createArray( int $number ): array;
    public function createDefault(): ContentInterface;
    public function createCollection( int $number ): ContentCollectionInterface;
    public function createRaw( int $number ): ContentDataTransferObject;
    public function createRawDefault(): ContentDataTransferObject;
    public function createRawWithText(): ContentDataTransferObject;
    public function createRawWithoutText(): ContentDataTransferObject;
}