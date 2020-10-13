<?php

namespace App\Providers;

use App\Interfaces\ProductsInterface;
use App\Interfaces\UsersInterface;
use App\Repositories\ProductsRepository;
use App\Repositories\UsersRepository;
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
        app()->bind(ProductsInterface::class, ProductsRepository::class);
        app()->bind(UsersInterface::class, UsersRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
