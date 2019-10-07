<?php

namespace App\Providers;

use App\Http\Controllers\CustomerController;
use App\Http\Repositories\CustomerRepository;
use App\Http\Repositories\impl\CustomerRepositoryImpl;
use App\Http\Service\CustomerService;
use App\Http\Service\CustomerServiceImpl;
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
        $this->app->singleton(CustomerRepository::class);
        $this->app->singleton(CustomerRepositoryImpl::class);
        $this->app->singleton(
            CustomerService::class,
            CustomerServiceImpl::class
        );
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
