<?php

declare(strict_types=1);

namespace App\MartTime;

use App\MartTime\Domain\MartianTransformer;
use Gacela\Framework\AbstractFactory;

final class MartTimeFactory extends AbstractFactory
{
    public function createMartianTransformer(): MartianTransformer
    {
        return new MartianTransformer();
    }
}
