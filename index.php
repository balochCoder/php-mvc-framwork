<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\core\Application;

$app = new Application();



$app->router->get('/', function () {
});




$app->run();
