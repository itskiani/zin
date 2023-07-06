<?php

namespace ItsKiani\Zin\App;

use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class Views
{
    protected Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function render(ResponseInterface $response, $view, array $context = [])
    {
        $response->getBody()->write(
            $this->twig->render($view, $context)
        );

        return $response;
    }
}