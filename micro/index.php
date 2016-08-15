<?php

use Stratify\ErrorHandlerModule\ErrorHandlerMiddleware;
use Stratify\Framework\Application;
use function Stratify\Framework\pipe;
use function Stratify\Framework\router;

require __DIR__ . '/vendor/autoload.php';
// Current bug in Puli
require_once __DIR__ . '/.puli/GeneratedPuliFactory.php';

$http = pipe([
    ErrorHandlerMiddleware::class,
    router([
        // Routes
        '/' => function (Twig_Environment $twig) {
            return $twig->render('/app/views/home.twig');
        },
    ]),
]);

$modules = [
    'error-handler',  // error handling
    'twig',           // so that Twig works out of the box
    'app',            // so that Puli can find our Twig views in the res/ directory
];

$app = new Application($modules, 'dev', $http);
$app->http()->run();
