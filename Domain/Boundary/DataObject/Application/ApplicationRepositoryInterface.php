<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Application;

interface ApplicationRepositoryInterface
{
    public function add(  ApplicationInterface $application ): void;
    public function get( string $guid ): ApplicationInterface;
    public function remove( string $guid ): void;    
}