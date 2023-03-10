<?php

namespace Sashalenz\GoogleMapsApi;

use Sashalenz\GoogleMapsApi\ApiModels\ComputeRoutes;

class GoogleMapsApi
{
    public static function computeRoutes(): ComputeRoutes
    {
        return new ComputeRoutes();
    }
}
