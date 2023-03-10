<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class RouteLegStep extends Data
{
    public function __construct(
        public int $distanceMeters,
        public string $staticDuration,
        public Polyline $polyline,
        public Location $startLocation,
        public Location $endLocation,
        public Optional|NavigationInstruction $navigationInstruction,
        public Optional|RouteLegStepTravelAdvisory $travelAdvisory
    ) {
    }
}
