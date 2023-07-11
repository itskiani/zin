<?php

namespace ItsKiani\Zin\App\controllers;

use ItsKiani\Zin\App\Views;
use Laminas\Diactoros\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController
{
    public function __construct(
        protected Views $view
    ){}

    public function index($request, $response)
    {
        return $this->view->render($response);
    }
}