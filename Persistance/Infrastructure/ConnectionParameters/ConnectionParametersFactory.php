<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ConnectionParameters;

class ConnectionParametersFactory implements ConnectionParametersFactoryInterface
{
    public function createFileConnection( string $path, string $file_handle, string $file_extension ): ConnectionParametersInterface
    {
        $parameters[ ConnectionParametersInterface::FILE_HANDLE ] = $file_handle;        
        $parameters[ ConnectionParametersInterface::FILE_EXTENSION ] = $file_extension;
        $parameters[ ConnectionParametersInterface::PATH ] = $path;
        $parameters[ ConnectionParametersInterface::FILE_PATH ] = $parameters[ ConnectionParametersInterface::PATH ] . $parameters[ ConnectionParametersInterface::FILE_HANDLE ] ."." . $parameters[ ConnectionParametersInterface::FILE_EXTENSION ];
        
        return new ConnectionParameters( $parameters );
    }    
}