<?php

namespace Penobit\GoogleTranslate\Facades;

use Illuminate\Support\Facades\Facade;

class GoogleTranslate extends Facade
{

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() {
        return 'GoogleTranslate';
    }
}