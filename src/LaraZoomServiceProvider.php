<?php

namespace Tsakib360\LaraZoom;

use Illuminate\Support\ServiceProvider;
use Tsakib360\LaraZoom\Services\Zoom;

class LaraZoomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('zoom',function(){
            return new Zoom();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/larazoom.php' => config_path('larazoom.php'),
        ]);
    }
}
