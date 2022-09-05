<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;

class AppServiceProvider extends AbstractServiceProvider
{
    public function provides(string $id): bool
    {
        return true;
    }

    public function register(): void
    {
        
    }
}