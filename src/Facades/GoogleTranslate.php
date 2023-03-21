<?php

namespace Penobit\GoogleTranslate\Facades;

use Illuminate\Support\Facades\Facade;

class CustomPackageFacade extends Facade
{

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() {
        return 'penobit-google-translate';
    }
}