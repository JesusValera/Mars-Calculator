<?php

declare(strict_types=1);

namespace App\ExampleModule\Infrastructure;

use App\ExampleModule\Domain\Clock;
use DateTimeImmutable;

final class ClockDateTimeImmutable implements Clock
{
    public function fromTime(string $datetime): DateTimeImmutable
    {
        return new DateTimeImmutable($datetime);
    }
}
