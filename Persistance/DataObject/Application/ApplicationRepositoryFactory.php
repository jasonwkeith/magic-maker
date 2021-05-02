<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;

class ApplicationRepositoryFactory implements ApplicationRepositoryFactoryInterface
{
    public function __construct( ApplicationPersisterInterface $persister, ApplicationMapperInterface $application_mapper )
    {
        $this->persister = $persister;
        $this->application_mapper = $application_mapper;
    }
    
    public function create(): ApplicationRepositoryInterface
    {
        return new ApplicationRepository( $this->persister, $this->application_mapper );
    }
}