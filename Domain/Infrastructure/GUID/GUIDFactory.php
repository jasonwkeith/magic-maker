<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\GUID;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDFactoryInterface;
use Ramsey\Uuid\Uuid;

class GUIDFactory implements GUIDFactoryInterface
{
	public function create(): string
	{
        $uuid4 = Uuid::uuid4();
        return $uuid4->__toString();
	}
}

