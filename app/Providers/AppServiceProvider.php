<?php

namespace App\Providers;

use App\Services\Sellers\SellerService;
use App\Services\Sellers\Impl\SellerServiceImpl;
use App\Services\Products\ProductService;
use App\Services\Products\Impl\ProductServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SellerService::class, SellerServiceImpl::class);
        $this->app->bind(ProductService::class, ProductServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

