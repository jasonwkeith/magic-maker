<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;

interface ApplicationInterface extends GUIDInterface
{
    public const NAME = "name";

    public function getName(): string;
}