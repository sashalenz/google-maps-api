<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Sashalenz\GoogleMapsApi\Enums\RouteLabel;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class Route extends Data
{
    public function __construct(
        #[WithCast(EnumCast::class)]
        public Optional|RouteLabel $routeLabel,
        #[DataCollectionOf(RouteLeg::class)]
        public Optional|DataCollection $legs,
        public Optional|int $distanceMeters,
        public Optional|string $duration,
        public Optional|string $staticDuration,
        public Optional|Polyline $polyline,
        public Optional|string $description,
        public Optional|array $warnings,
        public Optional|Viewport $viewport,
        public Optional|RouteTravelAdvisory $travelAdvisory,
        public Optional|string $routeToken
    ) {
    }
}
