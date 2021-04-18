<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\FileHandler;

use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;

trait FileHandlerTrait
{
    use ExceptionFactoryTrait;
    
    private function getFileResource( string $file_path, string $mode)
    {
        $resource = fopen( $file_path, $mode );
        if( ! is_resource( $resource ) )
        {
            throw $this->createException( "Could not create a valid resource for $file_path using mode $mode" );
        }
        return $resource;
    }
    
    private function getFileSize( string $file_path ): int
    {
        clearstatcache();
        return filesize( $file_path );
    }    
    
    private function isFilePathInvalid( string $path ): bool
    {
        return ! is_file( $path );
    }
    
    private function isPathInvalid( string $path ): bool
    {
        return ! is_dir( $path );
    }  

    private function readFileResource( $resource, int $length ): string
    {
        $data = "";
        if( $length > 0 )
        {
            $data = fread( $resource, $length );
        }
        fclose( $resource );        
        return $data;
    }     
    
    private function validateFilePath( string $file_path ) : void
    {
        if( $this->isFilePathInvalid( $file_path ) )
        {
            $message = "Invalid file path.  Provided file path was: $file_path";
            throw $this->createException( $message );
        } 
    }    
    
    private function validatePath( string $path ) : void
    {
        if( $this->isPathInvalid( $path) )
        {
            $message = "Invalid path.  Provided path was: $path";
            throw $this->createException( $message );
        } 
    }
   
}