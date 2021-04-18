<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

interface BookDataObjectInterface
{
    public function __construct(  string $guid, array $authors, int $published_year, string $subtitle, string $title );
    public function getGUID(): string;
    public function getAuthorGUIDs(): array;
    public function getPublishedYear(): int;    
    public function getSubtitle(): string;
    public function getTitle(): string;
}