<?php

namespace BlackM13\MeliPayamak;

use Illuminate\Support\ServiceProvider;

class MeliPayamakServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SmsService::class, function ($app) {
            return new SmsService(
                config('melipayamak.username'),
                config('melipayamak.password')
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/melipayamak.php' => config_path('melipayamak.php'),
        ], 'config');
    }
}