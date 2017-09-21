<?php

use App\Router;
use App\Request;

include 'vendor/autoload.php';

$router=new Router( include __DIR__ . '/src/routes.php' );
$req=new Request();
$controller=$router->getController($req);
$controller->indexAction();
