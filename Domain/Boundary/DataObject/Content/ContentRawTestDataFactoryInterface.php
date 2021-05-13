<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

interface ContentRawTestDataFactoryInterface
{
    public function __construct( HistoryTestDataFactoryInterface $history_test_data_factory );    
    public function create( int $number ): ContentDataTransferObject;
    public function createArray( int $number ): array;
    public function createDefault(): ContentDataTransferObject;
    public function createRawWithText(): ContentDataTransferObject;
    public function createRawWithoutText(): ContentDataTransferObject;
}