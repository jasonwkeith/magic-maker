<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

interface ApplicationDataObjectInterface
{
    public function __construct(  string $guid, string $name );
    public function getGUID(): string;
    public function getName(): string;
}