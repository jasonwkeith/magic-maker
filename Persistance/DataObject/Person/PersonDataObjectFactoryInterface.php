<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

interface PersonDataObjectFactoryInterface
{
    public function create( string $guid, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd ): PersonDataObjectInterface;
    public function createCollection( PersonDataObjectInterface ...$data_objects ): PersonDataObjectCollectionInterface;    
}