<?php

declare(strict_types=1);

namespace App\Classes;

class Home {
    public function index(){
        $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
        return 'Home';
    }
}