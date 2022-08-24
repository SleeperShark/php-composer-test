<?php

declare(strict_types=1);

namespace App\Classes;

class Invoice {
    public static function index():string{
        return 'INVOICES';
    }

    public static function create():string{
        return 'Create Invoice';
    }
}