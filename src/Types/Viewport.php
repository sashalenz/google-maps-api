<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;

class Viewport extends Data
{
    public function __construct(
        public LatLng $low,
        public LatLng $high
    ) {
    }
}
