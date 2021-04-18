<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\TestDataAPI;

interface TestDataAPIFactoryInterface
{
    public function create(): TestDataAPIInterface;
}