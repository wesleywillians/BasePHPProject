<?php

use Respect\Rest\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$r3 = new Router;

$r3->get('/users/*', function($screenName) {
        echo "User {$screenName}";
    });
