<?php

namespace App\Providers;

use App\EA;
use App\Participant;
use App\PS;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function ($view) {


            $links = Session::get('routes');
            $admin = Session::get('admin');
            $user_state = Session::get('state');
            $ea = EA::all()->sortBy('ea_name');
            $ps = PS::all()->sortBy('NAME');
            $participants =Participant::all();
            $view->with(compact('links', 'admin', 'user_state','ea','ps','participants'));
        });
    }
}
