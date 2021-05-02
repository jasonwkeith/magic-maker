<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;

interface TestDataAPIInterface
{
    public function createApplicationTestDataFactory(): ApplicationTestDataFactoryInterface;    
    public function createBookTestDataFactory(): BookTestDataFactoryInterface;
    public function createContentTestDataFactory(): ContentTestDataFactoryInterface;   
    public function createDateTimeTestDataFactory(): DateTimeTestDataFactoryInterface;       
    public function createExceptionTestDataFactory(): ExceptionTestDataFactoryInterface;   
    public function createHistoryTestDataFactory(): HistoryTestDataFactoryInterface;
    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface;   
    public function createUserTestDataFactory(): UserTestDataFactoryInterface;   
}