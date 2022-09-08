<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;

class AppServiceProvider extends AbstractServiceProvider
{
    public function provides(string $id): bool
    {
        $services =[
            Router::class,
            'response',
            'request',
            'emitter'
        ];
        return in_array($id, $services);
    }

    public function register(): void
    {
        $container = $this->getContainer();
        $container->addShared(Router::class, function () use ($container){
            $strategy = (new ApplicationStrategy())->setContainer($container);
            return (new Router)->setStrategy($strategy);
        });

        $container->addShared('response', Response::class);
        $container->addShared('request', function (){
            return ServerRequestFactory::fromGlobals(
                $_SERVER,
                $_GET,
                $_POST,
                $_COOKIE,
                $_FILES
            );
        });

        $container->addShared('emitter', SapiEmitter::class);
    }
}