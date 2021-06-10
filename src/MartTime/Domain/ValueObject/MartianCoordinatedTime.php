<?php

declare(strict_types=1);

namespace App\MartTime\Domain\ValueObject;

final class MartianCoordinatedTime
{
    private float $mtc = 0;

    public static function fromMSD(MarsSolDate $msd): self
    {
        $self = new self();
        $self->mtc = self::calculateMtc($msd);

        return $self;
    }

    private function __construct()
    {
    }

    public function asFloat(): float
    {
        return $this->mtc;
    }

    /**
     * MTC = (MSD mod 1) * 24h
     */
    private static function calculateMtc(MarsSolDate $msd): float
    {
        return fmod($msd->asFloat(), 1) * 24;
    }
}
