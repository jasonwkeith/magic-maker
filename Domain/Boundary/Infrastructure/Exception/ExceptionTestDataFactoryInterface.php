<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\Exception;

interface ExceptionTestDataFactoryInterface
{
    public function create0(): ExceptionInterface;
    public function create1(): ExceptionInterface;
    public function create2(): ExceptionInterface;
    public function create3(): ExceptionInterface;
    public function create4(): ExceptionInterface;
    public function create5(): ExceptionInterface;
    public function create6(): ExceptionInterface;
    public function create7(): ExceptionInterface;
    public function create8(): ExceptionInterface;
    public function create9(): ExceptionInterface;
    public function createDefault(): ExceptionInterface;
    public function createRaw0(): string;
    public function createRaw1(): string;
    public function createRaw2(): string;
    public function createRaw3(): string;
    public function createRaw4(): string;
    public function createRaw5(): string;
    public function createRaw6(): string;
    public function createRaw7(): string;
    public function createRaw8(): string;
    public function createRaw9(): string;
    public function createRawDefault(): string;    
    
}