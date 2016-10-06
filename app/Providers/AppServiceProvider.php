<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Materiel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('notif',Materiel::where('quantite','<','10')->get());

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
