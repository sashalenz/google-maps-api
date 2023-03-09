<?php

namespace Sashalenz\GoogleMapsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sashalenz\GoogleMapsApi\GoogleMapsApi
 */
class GoogleMapsApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Sashalenz\GoogleMapsApi\GoogleMapsApi::class;
    }
}
