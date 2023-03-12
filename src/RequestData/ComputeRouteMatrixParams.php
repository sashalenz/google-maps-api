<?php

namespace Sashalenz\GoogleMapsApi\RequestData;

use DateTime;
use Sashalenz\GoogleMapsApi\Enums\RouteTravelMode;
use Sashalenz\GoogleMapsApi\Enums\RoutingPreference;
use Sashalenz\GoogleMapsApi\Types\RouteMatrixDestination;
use Sashalenz\GoogleMapsApi\Types\RouteMatrixOrigin;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class ComputeRouteMatrixParams extends Data
{
    public function __construct(
        #[DataCollectionOf(RouteMatrixOrigin::class), Required]
        public Optional|DataCollection $origins,
        #[DataCollectionOf(RouteMatrixDestination::class), Required]
        public Optional|DataCollection $destinations,
        #[WithCast(EnumCast::class)]
        public Optional|RouteTravelMode $travelMode,
        #[WithCast(EnumCast::class)]
        public Optional|RoutingPreference $routingPreference,
        #[WithCast(DateTimeInterfaceCast::class)]
        public Optional|DateTime $departureTime,
        public Optional|string $languageCode,
        public Optional|string $regionCode,
        public Optional|array $extraComputations
    ) {
    }
}
