<?php

namespace Stockify\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Stockify extends IlluminateFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'stockify';
    }
}
