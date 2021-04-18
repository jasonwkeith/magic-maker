<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\DataObjectAPI;

interface DataObjectAPIFactoryInterface
{
    public function create(): DataObjectAPIInterface;
}