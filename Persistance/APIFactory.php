<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance;

use JasonWKeith\Application\Boundary\Persistance\APIInterface;
use JasonWKeith\Application\Boundary\Persistance\APIFactoryInterface;
use JasonWKeith\Application\Boundary\Persistance\Person\PersonRepositoryInterface;

use JasonWKeith\Domain\Boundary\APIInterface as DomainAPIInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactoryTrait;

use JasonWKeith\Persistance\Infrastructure\API\APIFactory as InfrastructureAPIFactory;

use JasonWKeith\Persistance\DataObject\Application\ApplicationDataObjectFactory;
use JasonWKeith\Persistance\DataObject\Application\ApplicationMapperFactory;
use JasonWKeith\Persistance\DataObject\Application\ApplicationPersisterFactory;
use JasonWKeith\Persistance\DataObject\Application\ApplicationRepositoryFactory;
use JasonWKeith\Persistance\DataObject\Application\ApplicationRepositoryFactoryInterface;

use JasonWKeith\Persistance\DataObject\Book\BookDataObjectFactory;
use JasonWKeith\Persistance\DataObject\Book\BookMapperFactory;
use JasonWKeith\Persistance\DataObject\Book\BookPersisterFactory;
use JasonWKeith\Persistance\DataObject\Book\BookRepositoryFactory;
use JasonWKeith\Persistance\DataObject\Book\BookRepositoryFactoryInterface;

use JasonWKeith\Persistance\DataObject\Content\ContentDataObjectFactory;
use JasonWKeith\Persistance\DataObject\Content\ContentMapperFactory;
use JasonWKeith\Persistance\DataObject\Content\ContentPersisterFactory;
use JasonWKeith\Persistance\DataObject\Content\ContentRepositoryFactory;
use JasonWKeith\Persistance\DataObject\Content\ContentRepositoryFactoryInterface;

use JasonWKeith\Persistance\DataObject\Person\PersonDataObjectFactory;
use JasonWKeith\Persistance\DataObject\Person\PersonMapperFactory;
use JasonWKeith\Persistance\DataObject\Person\PersonPersisterFactory;
use JasonWKeith\Persistance\DataObject\Person\PersonRepositoryFactory;
use JasonWKeith\Persistance\DataObject\Person\PersonRepositoryFactoryInterface;

use JasonWKeith\Persistance\DataObject\User\UserDataObjectFactory;
use JasonWKeith\Persistance\DataObject\User\UserMapperFactory;
use JasonWKeith\Persistance\DataObject\User\UserPersisterFactory;
use JasonWKeith\Persistance\DataObject\User\UserRepositoryFactory;
use JasonWKeith\Persistance\DataObject\User\UserRepositoryFactoryInterface;

use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperInterface;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeMapperFactory;
use JasonWKeith\Persistance\Infrastructure\DateTime\DateTimeDataObjectFactory;

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
            $this->createApplicationRepositoryFactory(),
            $this->createBookRepositoryFactory(),
            $this->createContentRepositoryFactory(),   
            $this->createPersonRepositoryFactory(),
            $this->createUserRepositoryFactory()            
        );
    }    
    
    private function createApplicationRepositoryFactory(): ApplicationRepositoryFactoryInterface
    {
        $file_handle = "application";

        $mapper_factory = new ApplicationMapperFactory( $this->domain_api->createApplicationFactory(), new ApplicationDataObjectFactory, $this->createDateTimeMapper(), $this->domain_api->createHistoryFactory() );
        $mapper = $mapper_factory->create();
     
        $parameters = $this->infrastructure_api->createFileConnectionParameters( $this->getStoragePath(), $file_handle, $this->getStorageExtension() );
        $reader = $this->infrastructure_api->createReaderConnection( $parameters );
        $writer = $this->infrastructure_api->createWriterConnection( $parameters );
        
        $persister_factory = new ApplicationPersisterFactory( $this->getExceptionFactory(), $writer, $reader, new DateTimeDataObjectFactory ,new ApplicationDataObjectFactory );
        $persister = $persister_factory->create();  
        
        return new ApplicationRepositoryFactory( $persister, $mapper );
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

    private function createContentRepositoryFactory(): ContentRepositoryFactoryInterface
    {
        $file_handle = "content";

        $mapper_factory = new ContentMapperFactory( $this->domain_api->createContentFactory(), new ContentDataObjectFactory );
        $mapper = $mapper_factory->create();
     
        $parameters = $this->infrastructure_api->createFileConnectionParameters( $this->getStoragePath(), $file_handle, $this->getStorageExtension() );
        $reader = $this->infrastructure_api->createReaderConnection( $parameters );
        $writer = $this->infrastructure_api->createWriterConnection( $parameters );
        
        $persister_factory = new ContentPersisterFactory( $this->getExceptionFactory(), $writer, $reader, new ContentDataObjectFactory );
        $persister = $persister_factory->create();  
        
        return new ContentRepositoryFactory( $persister, $mapper );
    }     
    
    private function createDateTimeMapper(): DateTimeMapperInterface
    {
        $factory = new DateTimeMapperFactory( $this->domain_api->createDateTimeFactory(), new DateTimeDataObjectFactory );
        return $factory->create();
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

    private function createUserRepositoryFactory(): UserRepositoryFactoryInterface
    {
        $file_handle = "user";

        $application_repository_factory = $this->createApplicationRepositoryFactory();
        $application_repository = $application_repository_factory->create();

        $person_repository_factory = $this->createPersonRepositoryFactory();
        $person_repository = $person_repository_factory->create();

        $mapper_factory = new UserMapperFactory( $this->domain_api->createUserFactory(), new UserDataObjectFactory, $person_repository, $application_repository );
        $mapper = $mapper_factory->create();
     
        $parameters = $this->infrastructure_api->createFileConnectionParameters( $this->getStoragePath(), $file_handle, $this->getStorageExtension() );
        $reader = $this->infrastructure_api->createReaderConnection( $parameters );
        $writer = $this->infrastructure_api->createWriterConnection( $parameters );
        
        $persister_factory = new UserPersisterFactory( $this->getExceptionFactory(), $writer, $reader, new UserDataObjectFactory );
        $persister = $persister_factory->create();  
        
        return new UserRepositoryFactory( $persister, $mapper );
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