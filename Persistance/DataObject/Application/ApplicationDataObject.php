<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryDataObjectInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryTrait;

class ApplicationDataObject implements ApplicationDataObjectInterface
{
    use HistoryTrait;
    
    public function __construct
    ( 
        string $guid, 
        HistoryDataObjectInterface $history,
        string $name 
    )
    {
        $this->guid = $guid;
        $this->history = $history;
        $this->name = $name;
    }
    
    public function getGUID(): string
    {
        return $this->guid;
    }
    
    public function getHistory(): HistoryDataObjectInterface
    {
        return $this->history;
    }    
    
    public function getName(): string
    {
        return $this->name;
    }   
}