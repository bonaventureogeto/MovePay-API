<?php

namespace App\Providers;
// namespace App\Http\Controllers;

use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Movepay', function ($app) {
            return new \App\Http\Controllers\Movepay();
        });
    }
}
