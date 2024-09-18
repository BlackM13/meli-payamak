<?php

namespace BlackM13\MeliPayamak;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SmsService::class, function ($app) {
            return new SmsService(
                config('sms.username'),
                config('sms.password')
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/sms.php' => config_path('sms.php')
        ], 'courier-config');
    }
}
