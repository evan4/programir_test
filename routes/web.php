<?php

use Mycms\Router;

$router = new Router();

$router->add('/','HomeController@index');
$router->add('/api/getRecord','RecordsController@test_method_details');

$router->dispatch();
