<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ConnectionParameters;

interface ConnectionParametersInterface
{
    public const PATH = "path";
    public const FILE_EXTENSION = "file_extension";
    public const FILE_HANDLE = "file_handle";
    public const FILE_PATH = "file_path";
    public const MODE = "mode";    
    
    public function getParameters(): array;
}