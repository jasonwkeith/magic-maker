<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Book;

use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonCollectionInterface;

interface BookInterface extends GUIDInterface
{
    public const AUTHORS = "authors";
    public const PUBLISHED_YEAR = "published_year";
    public const SUBTITLE = "subtitle";
    public const TITLE = "title";

    public function getAuthors(): PersonCollectionInterface;
    public function getPublishedYear(): int;
    public function getSubtitle(): string;
    public function getTitle(): string;
}