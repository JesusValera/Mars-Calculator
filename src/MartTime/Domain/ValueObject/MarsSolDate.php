<?php

declare(strict_types=1);

namespace App\MartTime\Domain\ValueObject;

final class MarsSolDate
{
    private float $msd = 0;

    public static function fromUTC(UniversalTimeCoordinated $utc): self
    {
        $self = new self();
        $self->msd = self::calculateMsd($utc);

        return $self;
    }

    private function __construct()
    {
    }

    public function asFloat(): float
    {
        return $this->msd;
    }

    /**
     * MSD = (Julian Date using International Atomic Time - 2451549.5 + k)/1.02749125 + 44796.0
     *       where k is a small correction of approximately 1⁄7200 d (or 12 s)".
     *
     * src: https://en.wikipedia.org/wiki/Timekeeping_on_Mars
     */
    private static function calculateMsd(UniversalTimeCoordinated $utc): float
    {
        $dateTime = $utc->asDateTime();

        $julianDay = gregoriantojd(
            (int) $dateTime->format('m'),
            (int) $dateTime->format('d'),
            (int) $dateTime->format('Y')
        );
        $k = 1 / 7200;

        return ($julianDay - 2451549.5 + $k) / 1.02749125 + 44796.0;
    }
}
