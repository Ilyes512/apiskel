<?php namespace Ilyes512\Apiskel\Lumen;

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
        $this->publishes([
            __DIR__ . '/../Config/apiskel.php' => base_path('config/apiskel.php'),
        ], 'apiskel');
        $this->mergeConfigFrom(__DIR__ . '/../Config/apiskel.php', 'apiskel');
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