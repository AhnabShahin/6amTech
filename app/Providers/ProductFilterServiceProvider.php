<?php

namespace App\Providers;

use App\Filter\ProductFilter;
use Illuminate\Support\ServiceProvider;

class ProductFilterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductFilter::class, function ($app) {
            return new ProductFilter(request()->order_by,request()->range,request()->status);
        });
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
