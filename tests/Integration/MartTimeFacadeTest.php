<?php

declare(strict_types=1);

namespace Tests\Integration;

use App\MartTime\Domain\Exceptions\InvalidAtomicFormat;
use App\MartTime\MartTimeFacade;
use PHPUnit\Framework\TestCase;

final class MartTimeFacadeTest extends TestCase
{
    public function test_transform_from_utc(): void
    {
        $facade = new MartTimeFacade();
        $martialTime = $facade->transformFromUTC('2005-08-15T15:52:01+00:00');

        self::assertSame(
            '{"mars_sol_date":46789.69107901298,"martian_coordinated_time":16.58589631144423}',
            $martialTime->toJson()
        );
    }

    public function test_invalid_utc(): void
    {
        $this->expectException(InvalidAtomicFormat::class);

        $facade = new MartTimeFacade();
        $facade->transformFromUTC('wrong-utc');
    }
}
