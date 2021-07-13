<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;

trait HistoryTrait
{
    public function getCreatedDate(): DateTimeInterface
    {
        return $this->_history_trait->getCreatedDate();
    }
    
    public function getCreatedBy(): string
    {
        return $this->_history_trait->getCreatedBy();
    }    
    
    public function getUpdatedDate(): ?DateTimeInterface
    {
        return $this->_history_trait->getUpdatedDate();
    }
    
    public function getUpdatedBy(): ?string
    {
        return $this->_history_trait->getUpdatedBy();
    }     
    
    private function setHistory( HistoryInterface $history ): void
    {
        $this->_history_trait = $history;
    }
}