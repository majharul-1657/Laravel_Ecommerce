<?php

namespace App\Providers;
use App\models\categories;
use Illuminate\Support\ServiceProvider;
use view;

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

 //view::shore('categories',$categories=category::all());


    }
}
