<?php

use DocForge\Framework\Builder;

require_once 'vendor/autoload.php';

$config = include 'docforge.config.php';

$builder = new Builder($config, $argv[1]);

$builder->run();
