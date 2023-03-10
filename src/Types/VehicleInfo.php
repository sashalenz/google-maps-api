<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Sashalenz\GoogleMapsApi\Enums\VehicleEmissionType;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class VehicleInfo extends Data
{
    public function __construct(
        #[WithCast(EnumCast::class)]
        public VehicleEmissionType $emissionType
    ) {
    }
}
