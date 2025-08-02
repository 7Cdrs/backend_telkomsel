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
        // Tambahkan global middleware jika diperlukan
        // $middleware->append(\App\Http\Middleware\ExampleMiddleware::class);

        // Middleware groups bisa dikonfigurasi jika ingin custom
        // $middleware->group('web', [...]);
        // $middleware->group('api', [...]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Handler tambahan jika ada, misalnya custom renderers atau reportable
        // $exceptions->render(function (Exception $e, $request) {
        //     return response()->view('errors.custom', [], 500);
        // });
    })
    ->create();
