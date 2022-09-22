<?php

require_once __DIR__.'/../vendor/autoload.php';

require_once base_path('bootstrap/app.php');

$container->get('emitter')->emit($response);