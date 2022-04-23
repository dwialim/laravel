<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'http://localhost:8000/laravel/public/index.php/transaksi/post',
        'http://localhost:8000/laravel/public/index.php/transaksi/laporan',
        'http://localhost:8000/laravel/public/index.php/obat/stock',
    ];
}
