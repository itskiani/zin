<?php

$container = new League\Container\Container();

$container->delegate(
    new League\Container\ReflectionContainer()
);

$container->addServiceProvider(
    new ItsKiani\Zin\App\providers\AppServiceProvider()
);
$container->addServiceProvider(
    new ItsKiani\Zin\App\providers\ViewServiceProvider()
);