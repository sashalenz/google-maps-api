<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;

class Status extends Data
{
    public function __construct(
        public string $code,
        public string $message,
        public array $details
    ) {
    }
}
