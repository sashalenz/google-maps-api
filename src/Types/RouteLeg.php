<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class RouteLeg extends Data
{
    public function __construct(
        public int $distanceMeters,
        public string $duration,
        public string $staticDuration,
        public Polyline $polyline,
        public Location $startLocation,
        public Location $endLocation,
        #[DataCollectionOf(RouteLegStep::class)]
        public DataCollection $steps,
        public RouteLegTravelAdvisory $travelAdvisory
    ) {
    }
}
