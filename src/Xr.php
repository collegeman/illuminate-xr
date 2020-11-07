<?php

namespace Illuminate\Xr;

use Illuminate\Support\Facades\Facade;

class Xr extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'illuminate-xr';
    }
}
