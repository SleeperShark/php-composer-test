<?php

declare(strict_types=1);

namespace App\Classes;

class Home {
    public function index(){

        setcookie(
            'userName',
            'Gio', 
            time() + 10
        );
        return 'Home';
    }
}