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
        $services = [
          Views::class
        ];

        return in_array($id, $services);
    }

    public function register(): void
    {
        $container = $this->getContainer();

        $container->addShared(Views::class, function(){
            $loader = new FilesystemLoader(base_path('views'));
            $twig = new Environment($loader, [
                'cache' => false
            ]);

            return new Views($twig);
        });
    }
}