<?php

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

session_start();

try {
    $env = Dotenv::createImmutable(base_path());
    $env->load();
}catch (InvalidPathException $e){
    //
}
