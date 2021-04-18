<?php
declare( strict_types = 1 );
namespace JasonWKeith\Application\Boundary\Persistance;

interface APIFactoryInterface
{
    public function create(): APIInterface;
}