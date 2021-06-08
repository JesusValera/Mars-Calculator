<?php

declare(strict_types=1);

namespace App\ExampleModule\Domain;

final class Adder implements AdderInterface
{
    private Clock $clock;

    public function __construct(Clock $clock)
    {
        $this->clock = $clock;
    }

    public function add(string $inputDate): string
    {
        $datetimeImmutable = $this->clock->fromTime($inputDate);

        return $datetimeImmutable->format('d/m/Y h:i');
    }
}
