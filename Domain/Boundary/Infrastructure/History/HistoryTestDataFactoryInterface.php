<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\History;

use JasonWKeith\Domain\Boundary\DataObject\User\UserTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeTestDataFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;

interface HistoryTestDataFactoryInterface
{
    public function __construct( HistoryFactoryInterface $factory, DateTimeTestDataFactoryInterface $date_time_test_data_factory, UserTestDataFactoryInterface $user_test_data_factory );
    public function create0(): HistoryInterface;
    public function create1(): HistoryInterface;
    public function create2(): HistoryInterface;
    public function create3(): HistoryInterface;
    public function create4(): HistoryInterface;
    public function create5(): HistoryInterface;
    public function create6(): HistoryInterface;
    public function create7(): HistoryInterface;
    public function create8(): HistoryInterface;
    public function create9(): HistoryInterface;
    public function createDefault(): HistoryInterface;
    public function createRaw0(): array;
    public function createRaw1(): array;
    public function createRaw2(): array;
    public function createRaw3(): array;
    public function createRaw4(): array;
    public function createRaw5(): array;
    public function createRaw6(): array;
    public function createRaw7(): array;
    public function createRaw8(): array;
    public function createRaw9(): array;
    public function createRawDefault(): array;
}