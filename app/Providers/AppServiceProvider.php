<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\View;
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
        View::composer('layouts.default', function ($view) {
            $admin = new UserController();
            $is_admin = $admin->adminInfo(); // Call a method in your controller to fetch the dynamic data
            $view->with('is_admin', $is_admin);
        });
        View::composer('inc.left-top', function ($view) {
            $admin = new UserController();
            $admin_name = $admin->adminName(); // Call a method in your controller to fetch the dynamic data
            $view->with('admin_name', $admin_name);
        });
        Paginator::useBootstrap();
    }
}
