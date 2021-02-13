<?php

namespace Validationapp;

use Illuminate\Support\ServiceProvider;
use Validationapp\Sdk\Client as ValidationappClient;
use Validationapp\Sdk\Validationapp;

class ValidationappServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Validationapp::class, function ($app) {
            return new Validationapp(
                new ValidationappClient(config('services.validationapp.key'))
            );
        });
    }
}
