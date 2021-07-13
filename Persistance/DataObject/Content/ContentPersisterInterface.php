<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Content;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

interface ContentPersisterInterface
{
    public function __construct
    ( 
        ExceptionFactoryInterface $exception_Factory, 
        WriterConnectionInterface $writer, 
        ReaderConnectionInterface $reader, 
        DateTimeDataObjectFactoryInterface $Datetime_data_object_factory, 
        HistoryDataObjectFactoryInterface $history_data_object_factory,      
        ContentDataObjectFactoryInterface $data_object_factory 
    );    
    public function write( ContentDataObjectInterface $data_object ): void;
    public function read( string $guid ): ContentDataObjectInterface;
    public function readCollection( array $guids ): ContentDataObjectCollectionInterface;    
    public function remove( string $guid ): void;    
}