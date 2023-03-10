<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class RouteLegTravelAdvisory extends Data
{
    public function __construct(
        public Optional|TollInfo $tollInfo,
        #[DataCollectionOf(SpeedReadingInterval::class)]
        public DataCollection $speedReadingIntervals
    ) {
    }
}
