<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\History;

interface HistoryFactoryInterface
{
	public function create( HistoryDataTransferObject $history_data_transfer_object ): HistoryInterface;
    public function createDataTransferObject(): HistoryDataTransferObject;	
}

