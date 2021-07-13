<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\API;

use JasonWKeith\Domain\Boundary\APIInterface as DomainAPIInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

interface APIFactoryInterface
{
    public function create( string $storage_path, DomainAPIInterface $domain_api, ExceptionFactoryInterface $exception_factory ): APIInterface;
}