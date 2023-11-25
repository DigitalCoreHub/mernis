<?php

namespace DigitalCoreHub\Mernis;

use Illuminate\Support\ServiceProvider;

class MernisServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/mernis.php' => config_path('mernis.php')
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/mernis.php',
            'mernis'
        );

        $this->app->bind('mernis', function () {
            return new Mernis();
        });
    }
}
