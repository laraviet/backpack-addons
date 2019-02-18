<?php

namespace HoagMah\BackpackExport\Facades;

use Illuminate\Support\Facades\Facade;

class BackpackExport extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'backpackexport';
    }
}
