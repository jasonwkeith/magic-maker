<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ConnectionParameters;

class ConnectionParameters implements ConnectionParametersInterface
{
    public function __construct( array $parameters )
    {
        $this->parameters = $parameters;
    }
    
    public function getParameters(): array
    {
        return $this->parameters;
    }
}