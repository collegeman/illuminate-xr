<?php

namespace Illuminate\Xr;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class XrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/xr.php', 'xr');

        $this->publishConfig();

        $this->loadViewsFrom(__DIR__. '/../resources/views', 'illuminate-xr');

        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->registerRoutes();

        Blade::componentNamespace(__NAMESPACE__.'\\Views\\Components', 'illuminate-xr');
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeWebConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        });
    }

    /**
    * Get route group configuration array.
    *
    * @return array
    */
    private function routeWebConfiguration()
    {
        return [
            'namespace'  => "Illuminate\Xr\Http\Controllers",
            'middleware' => 'web',
            'prefix'     => 'xr'
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register facade
        $this->app->singleton('illuminate-xr', function () {
            return new Xr;
        });
    }

    /**
     * Publish Config
     *
     * @return void
     */
    public function publishConfig()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/xr.php' => config_path('xr.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../public/vendor' => public_path('vendor'),
            ], 'public');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/illuminate-xr'),
            ], 'views');
        }
    }


}
