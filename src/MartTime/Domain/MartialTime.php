<?php

declare(strict_types=1);

namespace App\MartTime\Domain;

use App\MartTime\Domain\ValueObject\MarsSolDate;
use App\MartTime\Domain\ValueObject\MartianCoordinatedTime;

final class MartialTime
{
    private MarsSolDate $msd;

    private MartianCoordinatedTime $mtc;

    public function __construct(MarsSolDate $msd, MartianCoordinatedTime $mtc)
    {
        $this->msd = $msd;
        $this->mtc = $mtc;
    }

    public function toJson(): string
    {
        return json_encode([
            'mars_sol_date' => $this->msd->asFloat(),
            'martian_coordinated_time' => $this->mtc->asFloat(),
        ], JSON_THROW_ON_ERROR);
    }
}
