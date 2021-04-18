<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\WriterConnection;

use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

interface WriterConnectionFactoryInterface
{
    public function create( ConnectionParametersInterface $parameters ): WriterConnectionInterface;
}