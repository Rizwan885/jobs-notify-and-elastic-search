<?php

namespace App\Providers;

use App\Macro\RequestMacro;
use App\Service\UserService;
use Illuminate\Http\Request;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    //    Request::macro('username', function(){
    //     return $this->username ?? 'Not Set';
    //    });

    //    Request::mixin(new RequestMacro);

    //with service
    UserService::macro('printMyName',function(){
         return "service name";
    });
    }
}
