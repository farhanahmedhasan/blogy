<?php

namespace App\Providers;

use App\Http\Controllers\PaymentController;
use App\PaymentMethod\AnotherOne;
use App\PaymentMethod\PaymentBkash;
use App\PaymentMethod\PaymentContract;
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
