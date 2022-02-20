<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /** @var array<int, string> $except Returns an array of URI's that are accessable in maintenance mode. */
    protected $except = [
        //
    ];
}
