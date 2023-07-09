<?php

namespace ItsKiani\Zin\App\providers;

use ItsKiani\Zin\App\Views;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ViewServiceProvider extends AbstractServiceProvider
{
    public function provides(string $id): bool
    {
    }

    public function register(): void
    {
        $container = $this->getContainer();
        $loader = new FilesystemLoader(base_path('views'));
        $twig = new Environment($loader, [
            'cache' => false
        ]);
    }
}