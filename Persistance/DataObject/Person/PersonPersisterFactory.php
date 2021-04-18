<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

class PersonPersisterFactory implements PersonPersisterFactoryInterface
{
    public function __construct( ExceptionFactoryInterface $exception_factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, PersonDataObjectFactoryInterface $data_object_factory )
    {
        $this->exception_factory = $exception_factory;
        $this->writer = $writer;
        $this->reader = $reader;
        $this->data_object_factory = $data_object_factory;
    }  
    
    public function create() : PersonPersisterInterface
    {
        return new PersonPersister( $this->exception_factory, $this->writer, $this->reader, $this->data_object_factory );
    }

}