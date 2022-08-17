<?php

declare(strict_types = 1);

spl_autoload_register(function($class){
    $path = lcfirst(__DIR__.'/../'.str_replace('\\', '/', $class).'.php');

    if(file_exists($path)){
        require_once $class;
    }
});

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();
var_dump($paddleTransaction);