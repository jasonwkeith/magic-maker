<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

interface PersonTestDataFactoryInterface
{
    public function create0(): PersonInterface;
    public function create1(): PersonInterface;
    public function create2(): PersonInterface;
    public function create3(): PersonInterface;
    public function create4(): PersonInterface;
    public function create5(): PersonInterface;
    public function create6(): PersonInterface;
    public function create7(): PersonInterface;
    public function create8(): PersonInterface;
    public function create9(): PersonInterface;
    public function createDefault(): PersonInterface;
    public function createCollection0(): PersonCollectionInterface;
}