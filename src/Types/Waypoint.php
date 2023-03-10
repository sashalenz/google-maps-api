<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Waypoint extends Data
{
    public function __construct(
        public Optional|Location $location,
        public Optional|string $placeId,
        public Optional|string $address,
        public Optional|bool $via,
        public Optional|bool $vehicleStopover,
        public Optional|bool $sideOfRoad,
    ) {
    }
}
