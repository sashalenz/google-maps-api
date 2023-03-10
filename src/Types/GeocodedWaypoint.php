<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;

class GeocodedWaypoint extends Data
{
    public function __construct(
        public Status $geocoderStatus,
        public string $type,
        public bool $partialMatch,
        public string $placeId,
        public int $intermediateWaypointRequestIndex
    ) {
    }
}
