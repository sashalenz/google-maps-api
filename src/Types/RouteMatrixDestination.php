<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;

class RouteMatrixDestination extends Data
{
    public function __construct(
        public Waypoint $waypoint
    ) {
    }
}
