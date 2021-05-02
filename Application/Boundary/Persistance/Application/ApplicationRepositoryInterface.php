<?php
declare( strict_types = 1 );
namespace JasonWKeith\Application\Boundary\Persistance\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;

interface ApplicationRepositoryInterface
{
    public function add( ApplicationInterface $application ): void;
    public function get( string $guid ): ApplicationInterface;
}