<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryDataTransferObject;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;

class HistoryFactory implements HistoryFactoryInterface
{
	public function create( HistoryDataTransferObject $history_data_transfer_object  ): HistoryInterface
	{
        return new History( $history_data_transfer_object->created_date, $history_data_transfer_object->created_by, $history_data_transfer_object->updated_date, $history_data_transfer_object->updated_by );
	}
}

