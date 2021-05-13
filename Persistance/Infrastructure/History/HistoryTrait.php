<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

trait HistoryTrait
{
    public function getHistory(): HistoryDataObjectInterface
    {
        return $this->history;
    }
    private function setHistory( HistoryDataObjectInterface $history ): void
    {
        $this->history = $history;
    }
}