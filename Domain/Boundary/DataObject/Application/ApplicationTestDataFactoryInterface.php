<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Application;

interface ApplicationTestDataFactoryInterface
{
    public function create0(): ApplicationInterface;
    public function create1(): ApplicationInterface;
    public function create2(): ApplicationInterface;
    public function create3(): ApplicationInterface;
    public function create4(): ApplicationInterface;
    public function create5(): ApplicationInterface;
    public function create6(): ApplicationInterface;
    public function create7(): ApplicationInterface;
    public function create8(): ApplicationInterface;
    public function create9(): ApplicationInterface;
    public function createDefault(): ApplicationInterface;
    public function createCollection0(): ApplicationCollectionInterface;
}