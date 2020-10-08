<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NavigationServiceProvide extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       /* app()->bind('hello',function(){
            return('hi this is a test for register method');
        
        });*/
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) 
        {
            $test = 'User';
            return $view->with('test', $test);
        });
    }
}
