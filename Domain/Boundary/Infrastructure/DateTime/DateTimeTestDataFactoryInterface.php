<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\DateTime;

interface DateTimeTestDataFactoryInterface
{
    public function __construct( DateTimeFactoryInterface $factory );
    public function create0(): DateTimeInterface;
    public function create1(): DateTimeInterface;
    public function create2(): DateTimeInterface;
    public function create3(): DateTimeInterface;
    public function create4(): DateTimeInterface;
    public function create5(): DateTimeInterface;
    public function create6(): DateTimeInterface;
    public function create7(): DateTimeInterface;
    public function create8(): DateTimeInterface;
    public function create9(): DateTimeInterface;
    public function createDefault(): DateTimeInterface;
    public function createRaw0(): array;
    public function createRaw1(): array;
    public function createRaw2(): array;
    public function createRaw3(): array;
    public function createRaw4(): array;
    public function createRaw5(): array;
    public function createRaw6(): array;
    public function createRaw7(): array;
    public function createRaw8(): array;
    public function createRaw9(): array;
    public function createRawDefault(): array;
  
}