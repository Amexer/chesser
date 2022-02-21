<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /** @var array<int, class-string<Throwable>> $dontReport A list of the exception types that are not reported. */
    protected $dontReport = [
        //
    ];

    /** @var array<int, string> $dontFlash A list of the inputs that are never flashed for validation exceptions. */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void Returns nothing.
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
