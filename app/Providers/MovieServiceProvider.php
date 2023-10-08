<?php

namespace App\Providers;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\MovieImplementation;
use App\Http\Controllers\ShowImplementation;
use App\Http\Controllers\MovieShowInterface;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
class MovieServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {

    }

    public function boot(Request $request)
    {
        $this->app->bind(MovieShowInterface::class, function ($app) use ($request) {
            $route = $request->route();
            $action = $route->getAction();


            if ($action['controller'] === 'App\Http\Controllers\ShowController@index' ||
                $action['controller'] === 'App\Http\Controllers\ShowController@show') {


                return $app->make(ShowImplementation::class);

            } elseif ($action['controller'] === 'App\Http\Controllers\MoviesController@index' ||
                $action['controller'] === 'App\Http\Controllers\MoviesController@show') {

                    return $app->make(MovieImplementation::class);
            }


        });
    }

    }
