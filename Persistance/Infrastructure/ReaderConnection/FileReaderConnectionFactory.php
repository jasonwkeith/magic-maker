<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ReaderConnection;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;

use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;

class FileReaderConnectionFactory implements ReaderConnectionFactoryInterface
{
    use ExceptionFactoryTrait;
    use FileHandlerTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_factory )
    {
        $this->setExceptionFactory( $exception_factory );
    }

    public function create( ConnectionParametersInterface $connection_parameters ): ReaderConnectionInterface
    {
        return new FileReaderConnection( $this->getExceptionFactory(), $connection_parameters );
    }    
}