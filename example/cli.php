#!/usr/local/bin/php
<?php

declare(strict_types=1);

use App\ExampleModule\Facade;

require dirname(__DIR__) . '/vendor/autoload.php';

dump($argv); // $argv[1] -> first param

$facade = new Facade();
$sum = $facade->add(1, 2, 3);

print "The sum: {$sum}" . PHP_EOL;
