<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;

interface ApplicationRawTestDataFactoryInterface
{
    public function __construct( HistoryTestDataFactoryInterface $history_test_data_factory );
    public function create( int $number ): ApplicationDataTransferObject;
    public function createDefault(): ApplicationDataTransferObject;
}