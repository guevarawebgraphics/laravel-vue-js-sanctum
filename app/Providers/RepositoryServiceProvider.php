<?php

namespace App\Providers;

use App\Services\Users\Repositories\UserRepository;
use App\Services\Users\Repositories\UserRepositoryInterface;
use App\Services\Stores\Repositories\StoreRepository;
use App\Services\Stores\Repositories\StoreRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(StoreRepositoryInterface::class, StoreRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
