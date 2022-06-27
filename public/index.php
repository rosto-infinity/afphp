<?php

use Router\Router;

require_once"../vendor/autoload.php";

// echo "test1";
// echo $_GET['url'];

$router = new Router($_GET['url']);

$router->get( '/', 'App\controllers\BlogController@index');
// $router->get( '/', 'App\controllers\BlogController@welcome');
// $router->get( '/posts/', 'App\controllers\BlogController@index');
$router->get( '/posts/:id', 'App\controllers\BlogController@show');

$router->run();