<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Application;

interface ApplicationFactoryInterface
{
    public function create( ApplicationDataTransferObject $application_data_transfer_object ): ApplicationInterface;
    public function createCollection( ApplicationInterface ...$applicationss ): ApplicationCollectionInterface;
    public function createEmptyCollection(): ApplicationCollectionInterface;    
    public function createDTO(): array;    
}