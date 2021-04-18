<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\API;

use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

interface APIInterface
{
    public function createFileConnectionParameters( string $path, string $file_handle, string $file_extension ): ConnectionParametersInterface;
    public function createReaderConnection( ConnectionParametersInterface $connection_parameters ): ReaderConnectionInterface;
    public function createWriterConnection( ConnectionParametersInterface $connection_parameters ): WriterConnectionInterface;
    public function getStoragePath(): string;
}