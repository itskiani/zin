<?php

namespace ItsKiani\Zin\App;

use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class Views
{
    public function __construct(
        protected Environment $twig
    ){}

    public function render(ResponseInterface $response, $view, array $context = [])
    {
        $response->getBody()->write(
            $this->twig->render($view, $context)
        );

        return $response;
    }
}