<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary;

use JasonWKeith\Domain\Boundary\APIInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;


interface APIInterface
{
    public function createApplicationFactory(): ApplicationFactoryInterface;
    public function createApplicationTestDataFactory(): ApplicationTestDataFactoryInterface;    
    public function createBookFactory(): BookFactoryInterface;
    public function createBookTestDataFactory(): BookTestDataFactoryInterface;
    public function createContentFactory(): ContentFactoryInterface;
    public function createContentTestDataFactory(): ContentTestDataFactoryInterface;   
    public function createDateTimeFactory(): DateTimeFactoryInterface;
    public function createDateTimeTestDataFactory(): DateTimeTestDataFactoryInterface;    
    public function createExceptionFactory(): ExceptionFactoryInterface;
    public function createExceptionTestDataFactory(): ExceptionTestDataFactoryInterface;
    public function createPersonFactory(): PersonFactoryInterface;
    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface;
    public function createUserFactory(): UserFactoryInterface;
    public function createUserTestDataFactory(): UserTestDataFactoryInterface;   

}