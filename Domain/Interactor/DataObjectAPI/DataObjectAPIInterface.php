<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\DataObjectAPI;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;

interface DataObjectAPIInterface
{
    public function createApplicationFactory(): ApplicationFactoryInterface;    
    public function createBookFactory(): BookFactoryInterface;    
    public function createContentFactory(): ContentFactoryInterface;
    public function createDateTimeFactory(): DateTimeFactoryInterface;    
    public function createPersonFactory(): PersonFactoryInterface;    
    public function createUserFactory(): UserFactoryInterface;    
}