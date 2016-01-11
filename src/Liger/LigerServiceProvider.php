<?php

namespace Liger;

use Illuminate\Support\ServiceProvider;
use Liger\Publisher;

class LigerServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Register all Liger related services
        $this->app->singleton(Publisher::class, function ($app) {
            return new Publisher;
        });
    }


    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
   public function provides()
   {
       return [Publisher::class];
   }
}
