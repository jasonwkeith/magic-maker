<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary;

use JasonWKeith\Domain\Boundary\APIInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionTestDataFactoryInterface;


interface APIInterface
{
    public function createBookFactory(): BookFactoryInterface;
    public function createBookTestDataFactory(): BookTestDataFactoryInterface;
    public function createExceptionFactory(): ExceptionFactoryInterface;
    public function createExceptionTestDataFactory(): ExceptionTestDataFactoryInterface;
    public function createPersonFactory(): PersonFactoryInterface;
    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface;


}