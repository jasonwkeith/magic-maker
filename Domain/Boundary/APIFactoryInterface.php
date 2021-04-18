<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary;

interface APIFactoryInterface
{
    public function create(): APIInterface;
}