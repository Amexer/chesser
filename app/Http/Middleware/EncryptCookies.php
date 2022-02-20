<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /** @var array<int, string> $except Returns an array of cookie names that should not be encrypted. */
    protected $except = [
        //
    ];
}
