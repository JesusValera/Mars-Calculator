#!/usr/local/bin/php
<?php

declare(strict_types=1);

use App\MartTime\MartTimeFacade;

require dirname(__DIR__) . '/vendor/autoload.php';

// Atomic format (example: 2005-08-15T15:52:01+00:00)
$inputDate = $argv[1] ?? (new DateTimeImmutable())->format(DateTimeImmutable::ATOM);
$facade = new MartTimeFacade();
$output = $facade->transformFromUTC($inputDate);

dump($output->toJson());
