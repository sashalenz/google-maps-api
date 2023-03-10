<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Attributes\Validation\Between;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Location extends Data
{
    public function __construct(
        public LatLng $latLng,
        #[Between(0, 360)]
        public Optional|int $heading
    ) {
    }
}
