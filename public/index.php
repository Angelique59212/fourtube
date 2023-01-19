<?php

use App\Router;
use Symfony\Component\ErrorHandler\Debug;

require_once '../vendor/autoload.php';
require '../Router.php';

Debug::enable();

session_start();

try {
    Router::route();
}

catch (ReflectionException $e) {
    echo "La connexion a échoué";
}