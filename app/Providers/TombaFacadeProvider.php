<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facade\Tomba;
class TombaFacadeProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('Tomba',function(){
          return new Tomba();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
