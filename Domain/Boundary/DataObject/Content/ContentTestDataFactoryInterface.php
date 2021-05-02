<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Content;

interface ContentTestDataFactoryInterface
{
    public function create0(): ContentInterface;
    public function create1(): ContentInterface;
    public function create2(): ContentInterface;
    public function create3(): ContentInterface;
    public function create4(): ContentInterface;
    public function create5(): ContentInterface;
    public function create6(): ContentInterface;
    public function create7(): ContentInterface;
    public function create8(): ContentInterface;
    public function create9(): ContentInterface;
    public function createDefault(): ContentInterface;
    public function createCollection0(): ContentCollectionInterface;
}