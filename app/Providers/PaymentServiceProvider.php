<?php

namespace App\Providers;

use App\PaymentServices\PaymentServiceInterface;
use Illuminate\Support\ServiceProvider;
use \App\PaymentServices\Paypal;
use Illuminate\Contracts\Support\DeferrableProvider;

class PaymentServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(Paypal::class,function(){
        //     return new Paypal("123");
        // });
        $this->app->bind(PaymentServiceInterface::class,Paypal::class);
    }

    public function provides()
    {
      return [
        Paypal::class
      ];
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
