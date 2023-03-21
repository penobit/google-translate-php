<?php
namespace Penobit\GoogleTranslate;

class ServiceProvide {
    /**
    * Register any application services.
    *
    * @return void
    */
    public function register() {
        $this->app->bind('custom-package', function() {
            return new GoogleTranslate\GoogleTranslate();
        });
    }

    /**
    * Bootstrap any package services.
    *
    * @return void
    */
    public function boot() {}
}