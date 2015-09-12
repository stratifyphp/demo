<?php

use Stratify\ErrorHandlerModule\ErrorHandlerMiddleware;
use Stratify\Framework\Application;
use function Stratify\Framework\pipe;
use function Stratify\Framework\router;

require __DIR__ . '/vendor/autoload.php';

$routes = [
    '/' => function (Twig_Environment $twig) {
        return $twig->render('/app/views/home.twig');
    },
];

$http = pipe([
    ErrorHandlerMiddleware::class,
    router($routes),
]);
$modules = [
    'error-handler',
    'twig',
    'app',
];
$app = new Application($http, $modules);
$app->runHttp();
