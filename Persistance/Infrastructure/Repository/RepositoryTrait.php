<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\Repository;

trait RepositoryTrait
{
    public function remove( string $guid ): void
    {
        $this->persister->remove( $guid );
    }
}