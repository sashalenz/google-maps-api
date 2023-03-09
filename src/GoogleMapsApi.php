<?php

namespace Sashalenz\GoogleMapsApi;

use Sashalenz\GoogleMapsApi\ApiModels\Routes;

class GoogleMapsApi
{
    public static function computeRoutes(): Routes
    {
        return new Routes();
    }
}
