<?php

namespace Jjrohrer\MyPackage3\Facades;

use Illuminate\Support\Facades\Facade;

class MyPackage3 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mypackage3';
    }
}
