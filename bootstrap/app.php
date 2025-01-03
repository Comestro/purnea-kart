<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
            'admin' => \App\Http\Middleware\IsAdmin::class,
            'vendor.auth' => \App\Http\Middleware\IsVendor::class,            
            'auth:api' => \Tymon\JWTAuth\Http\Middleware\Authenticate::class,
 
        ]);

        $middleware->redirectTo(
            '/account/login',
            '/user/dashboard'
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Handle exceptions here if needed
    })
    ->create();
