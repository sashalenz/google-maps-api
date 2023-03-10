<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class RouteLegStepTravelAdvisory extends Data
{
    public function __construct(
        #[DataCollectionOf(SpeedReadingInterval::class)]
        public DataCollection $speedReadingIntervals
    ) {
    }
}
