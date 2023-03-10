<?php

namespace Sashalenz\GoogleMapsApi\RequestData;

use DateTime;
use Sashalenz\GoogleMapsApi\Enums\PolylineEncoding;
use Sashalenz\GoogleMapsApi\Enums\PolylineQuality;
use Sashalenz\GoogleMapsApi\Enums\RouteTravelMode;
use Sashalenz\GoogleMapsApi\Enums\RoutingPreference;
use Sashalenz\GoogleMapsApi\Enums\Units;
use Sashalenz\GoogleMapsApi\Types\RouteModifiers;
use Sashalenz\GoogleMapsApi\Types\Waypoint;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class ComputeRoutesParams extends Data
{
    public function __construct(
        public Optional|Waypoint $origin,
        public Optional|Waypoint $destination,
        #[DataCollectionOf(Waypoint::class)]
        public Optional|DataCollection $intermediates,
        #[WithCast(EnumCast::class)]
        public Optional|RouteTravelMode $travelMode,
        #[WithCast(EnumCast::class)]
        public Optional|RoutingPreference $routingPreference,
        #[WithCast(EnumCast::class)]
        public Optional|PolylineQuality $polylineQuality,
        #[WithCast(EnumCast::class)]
        public Optional|PolylineEncoding $polylineEncoding,
        #[WithCast(DateTimeInterfaceCast::class)]
        public Optional|DateTime $departureTime,
        public Optional|bool $computeAlternativeRoutes,
        #[DataCollectionOf(RouteModifiers::class)]
        public Optional|DataCollection $routeModifiers,
        public Optional|string $languageCode,
        public Optional|string $regionCode,
        #[WithCast(EnumCast::class)]
        public Optional|Units $units,
        public Optional|array $requestedReferenceRoutes,
        public Optional|array $extraComputations
    ) {
    }
}
