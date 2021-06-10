<?php

declare(strict_types=1);

namespace App\MartTime\Domain\ValueObject;

use App\MartTime\Domain\Exceptions\InvalidAtomicFormat;
use DateTimeImmutable;

final class UniversalTimeCoordinated
{
    private DateTimeImmutable $dateTime;

    /**
     * @throws InvalidAtomicFormat
     */
    public static function fromString(string $atomDate): self
    {
        $dateTime = DateTimeImmutable::createFromFormat(DateTimeImmutable::ATOM, $atomDate);

        if (!$dateTime instanceof DateTimeImmutable) {
            throw new InvalidAtomicFormat($atomDate);
        }

        return new self($dateTime);
    }

    private function __construct(DateTimeImmutable $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function asDateTime(): DateTimeImmutable
    {
        return $this->dateTime;
    }
}
