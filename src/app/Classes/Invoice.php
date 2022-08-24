<?php

declare(strict_types=1);

namespace App\Classes;

class Invoice {
    public function index():string{
        return 'INVOICES';
    }

    public function create():string{
        return '
<form method="POST" action="/invoices/create">
    <label>Amount</label>
    <input type="text" name="amount"/>
</form>
        ';
    }
}