<?php

use Stratify\ErrorHandlerModule\ErrorHandlerMiddleware;
use Stratify\Framework\Application;
use function Stratify\Framework\pipe;
use function Stratify\Framework\router;

require __DIR__ . '/vendor/autoload.php';

// Routes
$routes = [
    '/' => function (Twig_Environment $twig) {
        return $twig->render('/app/views/home.twig');
    },
];

// Create and run the application
$http = pipe([
    ErrorHandlerMiddleware::class,
    router($routes),
]);
$modules = [
    'error-handler',  // error handling
    'twig',           // so that Twig works out of the box
    'app',            // so that Puli can find our Twig views in the res/ directory
];
$app = new Application($http, $modules);
$app->runHttp();
