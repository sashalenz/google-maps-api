<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Sashalenz\GoogleMapsApi\Enums\Speed;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class SpeedReadingInterval extends Data
{
    public function __construct(
        public int $startPolylinePointIndex,
        public int $endPolylinePointIndex,
        #[WithCast(EnumCast::class)]
        public Speed $speed
    ) {
    }
}
