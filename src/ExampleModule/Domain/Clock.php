<?php

declare(strict_types=1);

namespace App\ExampleModule\Domain;

use DateTimeImmutable;

interface Clock
{
    public function fromTime(string $datetime): DateTimeImmutable;
}
