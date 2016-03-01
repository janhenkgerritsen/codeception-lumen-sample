<?php namespace App\Providers;

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
        \Validator::extend('alpha_dash_spaces', function ($attribute, $value) {
            return (bool)preg_match('/^[a-z0-9 .\-]+$/i', $value);
        });
    }
}
