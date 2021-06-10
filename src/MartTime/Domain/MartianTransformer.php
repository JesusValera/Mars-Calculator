<?php

declare(strict_types=1);

namespace App\MartTime\Domain;

use App\MartTime\Domain\ValueObject\MarsSolDate;
use App\MartTime\Domain\ValueObject\MartianCoordinatedTime;
use App\MartTime\Domain\ValueObject\UniversalTimeCoordinated;

final class MartianTransformer
{
    public function transformFromUTC(string $atomDate): MartialTime
    {
        $utc = UniversalTimeCoordinated::fromString($atomDate);
        $msd = MarsSolDate::fromUTC($utc);
        $mtc = MartianCoordinatedTime::fromMSD($msd);

        return new MartialTime($msd, $mtc);
    }
}
