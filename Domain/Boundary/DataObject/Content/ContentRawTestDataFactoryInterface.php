<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

interface ContentRawTestDataFactoryInterface
{
    public function create( int $number ): ContentDataTransferObject;
    public function createArray( int $number ): array;
    public function createDefault(): ContentDataTransferObject;
    public function createRawWithText(): ContentDataTransferObject;
    public function createRawWithoutText(): ContentDataTransferObject;
}