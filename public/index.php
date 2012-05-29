<?php

define('ROOT_PATH', realpath(__DIR__ . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR);

require_once __DIR__ . '/../src/NetBricks/Facade.php';
use \NetBricks\Facade as _;

_::loader()->registerAutoloader();
_::env(getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development');

require_once __DIR__. '/../etc/config.php';
_::bootstrap(__DIR__ . '/../etc/application.ini')->run();