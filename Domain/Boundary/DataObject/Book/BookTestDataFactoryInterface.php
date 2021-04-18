<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

interface BookTestDataFactoryInterface
{
    public function create0(): BookInterface;
    public function create1(): BookInterface;
    public function create2(): BookInterface;
    public function create3(): BookInterface;
    public function create4(): BookInterface;
    public function create5(): BookInterface;
    public function create6(): BookInterface;
    public function create7(): BookInterface;
    public function create8(): BookInterface;
    public function create9(): BookInterface;
    public function createDefault(): BookInterface;
    public function createCollection0(): BookCollectionInterface;
}