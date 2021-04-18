<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ReaderConnection;

use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

interface ReaderConnectionFactoryInterface
{
    public function create( ConnectionParametersInterface $connection_parameters ): ReaderConnectionInterface;
}