<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        api: __DIR__.'/../routes/api.php',
        apiPrefix: 'api/v1',
        health: '/up',
    )
    // ->withBroadcasting(
    //     __DIR__.'/../routes/api.php',
    //     ['prefix' => 'api', 'middleware' => ['api', 'auth:sanctum']],
    // )

    ->withMiddleware(function (Middleware $middleware) {    
        $middleware->validateCsrfTokens(except: [
            'http://127.0.0.1:8000/so',
           
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
