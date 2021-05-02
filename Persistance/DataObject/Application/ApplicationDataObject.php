<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;

class ApplicationDataObject implements ApplicationDataObjectInterface
{
    public function __construct(  string $guid, string $name )
    {
        $this->guid = $guid;
        $this->name = $name;
    }
    
    public function getGUID(): string
    {
        return $this->guid;
    }
    
    public function getName(): string
    {
        return $this->name;
    }    
}