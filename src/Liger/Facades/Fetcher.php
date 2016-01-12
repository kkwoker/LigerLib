<?php

namespace Liger\Facades;
use Illuminate\Support\Facades\Facade;


class Fetcher extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "Liger\Fetcher";
    }
}
