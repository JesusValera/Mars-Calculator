<?php

declare(strict_types=1);

namespace App\MartTime;

use App\MartTime\Domain\MartialTime;
use Gacela\Framework\AbstractFacade;

/**
 * @method MartTimeFactory getFactory()
 */
final class MartTimeFacade extends AbstractFacade
{
    public function transformFromUTC(string $atomDate): MartialTime
    {
        return $this->getFactory()
            ->createMartianTransformer()
            ->transformFromUtc($atomDate);
    }
}
