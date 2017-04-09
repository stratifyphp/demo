<?php

use Stratify\ErrorHandlerModule\ErrorHandlerMiddleware;
use Stratify\Framework\Application;
use function Stratify\Framework\pipe;
use function Stratify\Framework\router;

require __DIR__ . '/vendor/autoload.php';

$http = pipe([
    ErrorHandlerMiddleware::class,
    router([
        // Routes
        '/' => function (Twig_Environment $twig) {
            return $twig->render('home.twig');
        },
    ]),
]);

$modules = [
    'stratify/error-handler-module',  // error handling
    'stratify/twig-module',           // so that Twig works out of the box
    'app',                            // our config
];

$app = new Application($modules, 'dev', $http);
$app->http()->run();
