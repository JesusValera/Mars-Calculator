<?php

declare(strict_types=1);

namespace App\ExampleModule;

use Gacela\Framework\AbstractFacade;

/**
 * @method Factory getFactory()
 */
final class Facade extends AbstractFacade
{
    public function add(string $inputDate): string
    {
        return $this->getFactory()
            ->createAdder()
            ->add($inputDate);
    }
}
