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
        
    }
}