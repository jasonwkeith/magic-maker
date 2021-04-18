<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ReaderConnection;

interface ReaderConnectionInterface
{
    public function read() : string;
}