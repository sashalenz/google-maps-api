<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class GeocodingResults extends Data
{
    public function __construct(
        public Optional|GeocodedWaypoint $origin,
        public Optional|GeocodedWaypoint $destination,
        #[DataCollectionOf(GeocodedWaypoint::class)]
        public Optional|DataCollection $intermediates
    ) {
    }
}
