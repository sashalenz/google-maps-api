<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Sashalenz\GoogleMapsApi\Enums\Maneuver;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class NavigationInstruction extends Data
{
    public function __construct(
        #[WithCast(EnumCast::class)]
        public Maneuver $maneuver,
        public string $instructions
    ) {
    }
}
