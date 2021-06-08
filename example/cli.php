#!/usr/local/bin/php
<?php

declare(strict_types=1);

use App\ExampleModule\Facade;

require dirname(__DIR__) . '/vendor/autoload.php';

$inputDate = $argv[1] ?? 'now';
$facade = new Facade();
$output = $facade->add($inputDate);

print $output . PHP_EOL;
