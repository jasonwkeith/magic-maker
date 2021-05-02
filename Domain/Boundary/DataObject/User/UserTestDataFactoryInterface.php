<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\User;

interface UserTestDataFactoryInterface
{
    public function create0(): UserInterface;
    public function create1(): UserInterface;
    public function create2(): UserInterface;
    public function create3(): UserInterface;
    public function create4(): UserInterface;
    public function create5(): UserInterface;
    public function create6(): UserInterface;
    public function create7(): UserInterface;
    public function create8(): UserInterface;
    public function create9(): UserInterface;
    public function createDefault(): UserInterface;
    public function createCollection0(): UserCollectionInterface;
}