<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationCollectionInterface;
use JasonWKeith\Persistance\Infrastructure\Repository\RepositoryTrait;

class ApplicationRepository implements ApplicationRepositoryInterface
{
    use RepositoryTrait;
    
    public function __construct( ApplicationArchiverInterface $archiver, ApplicationPersisterInterface $persister, ApplicationMapperInterface $mapper )
    {
        $this->archiver = $archiver;
        $this->persister = $persister;
        $this->mapper = $mapper;
    } 
    
    public function add(  ApplicationInterface $application ): void
    {
        $data_object = $this->mapper->createDataObject( $application );
        $this->persister->write( $data_object );
        $this->archiver->write( $data_object );
    }

    public function get( string $guid ): ApplicationInterface
    {
        $data_object = $this->persister->read( $guid );
        return $this->mapper->createEntity( $data_object );
    }   
    
    public function getCollection( array $guids ): ApplicationCollectionInterface
    {
        $data_objects = $this->persister->readCollection( $guids );        
        return $this->mapper->createEntityCollection( $data_objects );
    }
    
    public function getHistory( string $guid ): ApplicationDataObjectCollectionInterface    
    {
        return $this->archiver->read( $guid );
    }
}