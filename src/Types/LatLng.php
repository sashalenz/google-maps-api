<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Attributes\Validation\Between;
use Spatie\LaravelData\Data;

class LatLng extends Data
{
    public function __construct(
        #[Between(-90.0, 90.0)]
        public string $latitude,
        #[Between(-180.0, 180.0)]
        public string $longitude
    ) {
    }
}
