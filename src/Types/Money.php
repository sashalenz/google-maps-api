<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;

class Money extends Data
{
    public function __construct(
        public string $currencyCode,
        public string $units,
        public int $nanos
    ) {
    }
}
