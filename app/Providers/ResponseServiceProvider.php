<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Response;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Response::macro('success', function ($data, $statusCode) {
            return Response::make(
                collect(
                    [
                        ['errors' => false],
                        ['data' => $data],
                    ]
                ),
                $statusCode
            );
        });
        Response::macro('errors', function ($data, $statusCode) {
            return Response::make(
                collect(
                    [
                        ['errors' => true],
                        ['message' => $data],
                    ]
                ),
                $statusCode
            );
        });
    }
}
