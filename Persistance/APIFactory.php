<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance;

use JasonWKeith\Application\Boundary\Persistance\APIInterface;
use JasonWKeith\Application\Boundary\Persistance\APIFactoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;

use JasonWKeith\Domain\Boundary\APIInterface as DomainAPIInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactoryTrait;

use JasonWKeith\Persistance\Infrastructure\API\APIFactory as InfrastructureAPIFactory;
use JasonWKeith\Persistance\DataObject\Book\BookDataObjectFactory;
use JasonWKeith\Persistance\DataObject\Book\BookMapperFactory;
use JasonWKeith\Persistance\DataObject\Book\BookPersisterFactory;
use JasonWKeith\Persistance\DataObject\Book\BookRepositoryFactory;
use JasonWKeith\Persistance\DataObject\Book\BookRepositoryFactoryInterface;


use JasonWKeith\Persistance\DataObject\Person\PersonDataObjectFactory;
use JasonWKeith\Persistance\DataObject\Person\PersonMapperFactory;
use JasonWKeith\Persistance\DataObject\Person\PersonPersisterFactory;
use JasonWKeith\Persistance\DataObject\Person\PersonRepositoryFactory;
use JasonWKeith\Persistance\DataObject\Person\PersonRepositoryFactoryInterface;

class APIFactory implements APIFactoryInterface
{
    use ExceptionFactoryTrait;

    public function __construct( string $root_storage_path, string $storage_extension, DomainAPIInterface $domain_api )
    {
        $this->domain_api = $domain_api;
        $this->setExceptionFactory( $this->domain_api->createExceptionFactory() );
        $this->setRootStoragePath( $root_storage_path );
        $this->setStorageExtension( $storage_extension );
        $this->infrastructure_api_factory = new InfrastructureAPIFactory;
        $this->infrastructure_api = $this->infrastructure_api_factory->create( $this->getStoragePath(), $this->getExceptionFactory() );
    }

    public function create(): APIInterface
    {
        return new API
        ( 
            $this->createBookRepositoryFactory(),
            $this->createPersonRepositoryFactory()
        );
    }    
    
    private function createBookRepositoryFactory(): BookRepositoryFactoryInterface
    {
        $file_handle = "book";

        $mapper_factory = new BookMapperFactory( $this->domain_api->createBookFactory(), new BookDataObjectFactory, $this->createPersonRepositoryFactory()->create() );
        $mapper = $mapper_factory->create();
     
        $parameters = $this->infrastructure_api->createFileConnectionParameters( $this->getStoragePath(), $file_handle, $this->getStorageExtension() );
        $reader = $this->infrastructure_api->createReaderConnection( $parameters );
        $writer = $this->infrastructure_api->createWriterConnection( $parameters );
        
        $persister_factory = new BookPersisterFactory( $this->getExceptionFactory(), $writer, $reader, new BookDataObjectFactory );
        $persister = $persister_factory->create();  
        
        return new BookRepositoryFactory( $persister, $mapper );
    }    
    
    
    private function createPersonRepositoryFactory(): PersonRepositoryFactoryInterface
    {
        $file_handle = "person";

        $mapper_factory = new PersonMapperFactory( $this->domain_api->createPersonFactory(), new PersonDataObjectFactory );
        $mapper = $mapper_factory->create();
     
        $parameters = $this->infrastructure_api->createFileConnectionParameters( $this->getStoragePath(), $file_handle, $this->getStorageExtension() );
        $reader = $this->infrastructure_api->createReaderConnection( $parameters );
        $writer = $this->infrastructure_api->createWriterConnection( $parameters );
        
        $persister_factory = new PersonPersisterFactory( $this->getExceptionFactory(), $writer, $reader, new PersonDataObjectFactory );
        $persister = $persister_factory->create();  
        
        return new PersonRepositoryFactory( $persister, $mapper );
    }
    
    private function getStorageExtension(): string
    {
        return $this->storage_extension;
    }
    
    private function getStoragePath(): string
    {
        return $this->root_storage_path;
    }    
    
    private function setRootStoragePath( string $path ): void
    {
        $this->root_storage_path = $path;
    }
    
    private function setStorageExtension( string $extension ): void
    {
        $this->storage_extension = $extension;
    }
}