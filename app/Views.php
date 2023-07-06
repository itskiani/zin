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

    public function render(ResponseInterface $response, $view, $data = [])
    {
        $response->getBody()->write(
            $this->twig->render($view, $data)
        );

        return $response;
    }
}