<?php

namespace App\Providers;

use App\Interfaces\PermissionInterface;
use App\Repositories\PermissionsRepository;
use App\Decorators\Cache\PermissionsCacheDecorator;

use App\Interfaces\ProductsInterface;
use App\Repositories\ProductsRepository;
use App\Decorators\Cache\ProductsCacheDecorator;

use App\Interfaces\UsersInterface;
use App\Repositories\UsersRepository;
use App\Decorators\Cache\UsersCacheDecorator;

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
        // to use the cache db system, change the repository class to Cache class
        app()->bind(ProductsInterface::class, ProductsRepository::class);
        app()->bind(UsersInterface::class, UsersRepository::class);
        app()->bind(PermissionInterface::class, PermissionsRepository::class);
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
