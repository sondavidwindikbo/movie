<?php

namespace App\Providers;

use App\Views\Composers\MenuComposer;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\View;
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
        // View::share('menu', [
        //     'home'    => '/',
        //     'about'   => '/about',
        //     'contact' => '/contact',
        // ]);

        View::composer( '*', MenuComposer::class);

    }
} 



