<?php 

namespace EquiPC\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('flash', function () {
            return $this->app->make('EquiPC\Flash\FlashNotifier');
        });
    }
}
