<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class RouteModifiers extends Data
{
    public function __construct(
        public Optional|bool $avoidTolls,
        public Optional|bool $avoidHighways,
        public Optional|bool $avoidFerries,
        public Optional|bool $avoidIndoor,
        #[DataCollectionOf(VehicleInfo::class)]
        public Optional|DataCollection $vehicleInfo,
        public Optional|array $tollPasses,
    ) {
    }
}
