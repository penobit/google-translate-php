<?php
namespace Penobit\GoogleTranslate;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {
    /**
    * Register any application services.
    *
    * @return void
    */
    public function register() {
        $this->app->bind('GoogleTranslate', function($app) {
            return new GoogleTranslate();
        });
    }

    /**
    * Bootstrap any package services.
    *
    * @return void
    */
    public function boot() {}
}