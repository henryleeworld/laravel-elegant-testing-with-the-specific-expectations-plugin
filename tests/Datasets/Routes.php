<?php

use Illuminate\Support\Facades\Route;

dataset('routes', function () {
    return array_values(collect(Route::getRoutes())
        ->filter(fn ($route) => in_array('GET', $route->methods()))
        ->reject(fn ($route) => in_array('auth:web', $route->gatherMiddleware()))
        ->reject(fn ($route) => in_array('Laravel\Jetstream\Http\Middleware\AuthenticateSession', $route->gatherMiddleware()))
        ->reject(fn ($route) => in_array($route->uri(), ['api/user', 'livewire/preview-file/{filename}', 'sanctum/csrf-cookie', 'two-factor-challenge', '_ignition/health-check']))
        ->map(function ($route) {
            return $route->uri();
        })->toArray());
});
