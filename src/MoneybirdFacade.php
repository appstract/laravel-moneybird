<?php

namespace Appstract\Moneybird;

use Illuminate\Support\Facades\Facade;

class MoneybirdFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'moneybird';
    }
}
