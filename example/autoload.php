<?php

namespace SpencerMortensen\Autoloader;

$project = __DIR__;

$namespaces = array(
	'Example' => 'src',
	'Monolog' => 'vendor/monolog/monolog/src/Monolog',
	'Psr\\Log' => 'vendor/psr/log/Psr/Log'
);

require "{$project}/vendor/spencer-mortensen/autoloader/src/Autoloader.php";

new Autoloader($project, $namespaces);
