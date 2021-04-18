<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\WriterConnection;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactoryTrait;

use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

class FileWriterConnectionFactory implements WriterConnectionFactoryInterface
{
    use ExceptionFactoryTrait;
    use FileHandlerTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->setExceptionFactory( $exception_factory );
    }

    public function create( ConnectionParametersInterface $parameters ): WriterConnectionInterface
    {
        return new FileWriterConnection( $this->getExceptionFactory(), $parameters );
    }    
}