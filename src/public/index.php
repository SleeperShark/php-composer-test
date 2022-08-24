<?php

require_once __DIR__.'/../vendor/autoload.php';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

$router = new App\Router();

$router->register('/', function(){
    echo 'HOME';
});

$router->register('/invoices', function(){
    echo 'INVOICES';
});

echo $router->resolve($_SERVER['REQUEST_URI']);