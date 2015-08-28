<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Stratify\Http\Application;

require __DIR__ . '/vendor/autoload.php';

/**
 * This application is a micro-service that returns random numbers.
 */
$app = new Application(function (ServerRequestInterface $request, ResponseInterface $response) {
    $response->getBody()->write(rand());
    return $response;
});

$app->run();
