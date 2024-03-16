<?php

namespace App\Providers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*
         * Wysyłka maila w srodowisku developerskim zawsze na ten adres.
         */
        if ($this->app->environment('local')) {
            Mail::alwaysTo('michal.broszkiewicz@bmsoftware.com.pl');
        }
    }
}
