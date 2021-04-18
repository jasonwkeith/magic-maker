<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;

interface TestDataAPIInterface
{
    public function createBookTestDataFactory(): BookTestDataFactoryInterface;
    public function createExceptionTestDataFactory(): ExceptionTestDataFactoryInterface;    
    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface;   
}