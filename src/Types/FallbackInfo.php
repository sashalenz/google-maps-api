<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Sashalenz\GoogleMapsApi\Enums\FallbackReason;
use Sashalenz\GoogleMapsApi\Enums\FallbackRoutingMode;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class FallbackInfo extends Data
{
    public function __construct(
        #[WithCast(EnumCast::class)]
        public FallbackRoutingMode $routingMode,
        #[WithCast(EnumCast::class)]
        public FallbackReason $reason,
    ) {
    }
}
