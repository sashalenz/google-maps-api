<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class RouteMatrixOrigin extends Data
{
    public function __construct(
        public Waypoint $waypoint,
        public Optional|RouteModifiers $routeModifiers
    ) {
    }
}
