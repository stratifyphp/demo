<?php

use Stratify\Http\Application;
use Zend\Diactoros\Response\TextResponse;

require __DIR__ . '/vendor/autoload.php';

/**
 * This application is a micro-service that returns random numbers.
 */
$app = new Application(function () {
    return new TextResponse((string) rand());
});

$app->run();
