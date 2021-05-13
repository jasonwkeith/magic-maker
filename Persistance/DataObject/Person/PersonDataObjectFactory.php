<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;

class PersonDataObjectFactory implements PersonDataObjectFactoryInterface
{
    public function create( string $guid, HistoryDataObjectInterface $history, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd ): PersonDataObjectInterface
    {
        return new PersonDataObject( $guid, $history, $first_name, $middle_name, $last_name, $nickname, $suffix, $has_md, $has_phd );
    }
    
    public function createCollection( PersonDataObjectInterface ...$data_objects ): PersonDataObjectCollectionInterface
    {
        return new PersonDataObjectCollection( ...$data_objects );
    } 
}