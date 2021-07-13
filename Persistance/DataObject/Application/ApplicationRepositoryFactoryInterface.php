<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Application\Boundary\Persistance\Application\ApplicationRepositoryInterface;

interface ApplicationRepositoryFactoryInterface
{
    public function __construct(  ApplicationArchiverInterface $archiver, ApplicationPersisterInterface $persister, ApplicationMapperInterface $application_mapper );
    public function create(): ApplicationRepositoryInterface;
}