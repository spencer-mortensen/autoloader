<?php

namespace Example;

//////

use SpencerMortensen\Autoloader\Autoloader;

require __DIR__ . '/vendor/spencer-mortensen/autoload/src/Autoloader.php';

$classes = array(
	'Example' => 'src',
	'Monolog' => 'vendor/monolog/monolog/src/Monolog',
	'Psr\\Log' => 'vendor/psr/log/Psr/Log'
);

new Autoloader(__DIR__, $classes);

//////


$math = new Math();

echo $math->add(1, 1), "\n";
