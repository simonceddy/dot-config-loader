<?php
require 'vendor/autoload.php';

class CustomConfig extends Adbar\Dot {

}

$loader = new Eddy\DotConfig\LoadConfigFromPaths([
    'className' => CustomConfig::class
]);

$config = $loader->load(
    'examples'
);

dd($config);
