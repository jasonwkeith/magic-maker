<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\WriterConnection;

interface WriterConnectionInterface 
{
    public function write( string $data ): void;
}