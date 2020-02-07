<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        //View::share('menus',  Menu::smenu());
        // view()->composer('home', function($view) {
        //     $view->with('menus', Menu::smenu()); 
        // }); 
        
        view()->composer('layouts.main', function($view) {
            $view->with('menus', Menu::smenu()); 
        }); 
    }
}
