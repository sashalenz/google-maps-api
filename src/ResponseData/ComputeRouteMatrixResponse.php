<?php

namespace Sashalenz\GoogleMapsApi\ResponseData;

use Sashalenz\GoogleMapsApi\Enums\RouteMatrixElementCondition;
use Sashalenz\GoogleMapsApi\Types\FallbackInfo;
use Sashalenz\GoogleMapsApi\Types\RouteTravelAdvisory;
use Sashalenz\GoogleMapsApi\Types\Status;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ComputeRouteMatrixResponse extends Data
{
    public function __construct(
        public Status $status,
        #[WithCast(EnumCast::class)]
        public RouteMatrixElementCondition $condition,
        public Optional|int $distanceMeters,
        public Optional|string $duration,
        public Optional|string $staticDuration,
        public Optional|RouteTravelAdvisory $travelAdvisory,
        public Optional|FallbackInfo $fallbackInfo,
        public Optional|int $originIndex,
        public Optional|int $destinationIndex
    ) {
    }
}
