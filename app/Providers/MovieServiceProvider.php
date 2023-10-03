<?php

namespace App\Providers;

use App\Http\Controllers\MovieImplementation;
use App\Http\Controllers\ShowImplementation;
use App\Http\Controllers\MovieShowInterface;
use Illuminate\Support\ServiceProvider;

class MovieServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(movieShowInterface::class, MovieImplementation::class,ShowImplementation::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}