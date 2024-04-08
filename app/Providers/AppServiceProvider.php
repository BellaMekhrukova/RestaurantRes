<?php

namespace App\Providers;


use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::defaultView('pagination::default');
        Gate::define('destroy-reservation', function (User $user, Reservation $reservation) {
            return $user->id==1;
        });
    }
}
