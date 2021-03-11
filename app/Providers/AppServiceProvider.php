<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Hello\Hello;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      app()->bind('coca-cola',function(){
          return new Hello;
      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
