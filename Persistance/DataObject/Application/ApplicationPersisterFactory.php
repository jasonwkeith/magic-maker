<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

class ApplicationPersisterFactory implements ApplicationPersisterFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_Factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, ApplicationDataObjectFactoryInterface $data_object_factory)
    {
        $this->exception_factory = $exception_Factory;
        $this->writer = $writer;
        $this->reader = $reader;
        $this->data_object_factory = $data_object_factory;
    }
    public function create(): ApplicationPersisterInterface
    {
        return new ApplicationPersister( $this->exception_factory, $this->writer, $this->reader, $this->data_object_factory );
    }

}