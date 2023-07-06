<?php

namespace ItsKiani\Zin\App;

use Twig\Environment;

class Views
{
    protected Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
}