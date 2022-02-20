<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /** @var array<int, string> $except Returns an array of field names that should not be trimed. */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}
