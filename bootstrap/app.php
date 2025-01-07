<?php

use App\Exceptions\BookNotFoundException;
use App\Helpers\ApiResponse;
use App\Http\Middleware\JwtMiddleware;
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
       // $middleware->append(JwtMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (BookNotFoundException $exception){
            return ApiResponse::error($exception->getMessage(),$exception->getMessage(), $exception->getCode());
        });
    })->create();
