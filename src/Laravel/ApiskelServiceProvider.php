<?php namespace Ilyes512\Apiskel\Laravel;

use Illuminate\Support\ServiceProvider;

class ApiskelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->loadTranslationsFrom(__DIR__ . '../lang/en/', 'apiskel');

        // php artisan vendor:publish --provider="Ilyes512\Apiskel\Laravel\ApiskelServiceProvider" --tag=apiskel --force
        $this->publishes([
            __DIR__ . '/../Config/apiskel.php' => config_path('apiskel.php'),
        ], 'general');
        $this->mergeConfigFrom(__DIR__ . '/../Config/apiskel.php', 'general');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
