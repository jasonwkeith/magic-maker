<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ConnectionParameters;

interface ConnectionParametersFactoryInterface
{
    public function createFileConnection( string $path, string $file_path, string $file_extension ): ConnectionParametersInterface;
   
}