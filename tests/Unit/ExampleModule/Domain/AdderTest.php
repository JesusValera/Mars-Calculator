<?php

declare(strict_types=1);

namespace Tests\Unit\ExampleModule\Domain;

use App\ExampleModule\Domain\Adder;
use App\ExampleModule\Domain\Clock;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

final class AdderTest extends TestCase
{
    public function testItCanAdd(): void
    {
        $facade = new Adder($this->createClockStub());

        self::assertSame('09/06/2021 12:05', $facade->add('bla bla'));
    }

    private function createClockStub(): Clock
    {
        return new class() implements Clock {
            public function fromTime(string $datetime): DateTimeImmutable
            {
                return DateTimeImmutable::createFromFormat('d/m/Y H:i:s', '09/06/2021 12:05:00');
            }
        };
    }
}
