<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

interface ApplicationArchiveCollectionInterface
{
    public function __construct( ApplicationArchiveInterface ...$application_archives );
}