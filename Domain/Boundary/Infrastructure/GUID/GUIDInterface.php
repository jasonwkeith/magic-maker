<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\GUID;

interface GUIDInterface 
{
    public const GUID ="guid";    
    public function getGUID(): string;
}