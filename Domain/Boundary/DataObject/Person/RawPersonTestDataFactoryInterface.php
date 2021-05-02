<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

interface RawPersonTestDataFactoryInterface
{
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
    public function createRawWithMD(): array;
    public function createRawWithoutMD(): array;    
    public function createRawWithMiddlename(): array;
    public function createRawWithoutMiddlename(): array;    
    public function createRawWithNickname(): array;
    public function createRawWithoutNickname(): array;    
    public function createRawWithPHD(): array;
    public function createRawWithoutPHD(): array;    
    public function createRawWithSuffix(): array;    
    public function createRawWithoutSuffix(): array;     
}