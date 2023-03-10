<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class TollInfo extends Data
{
    public function __construct(
        #[DataCollectionOf(Money::class)]
        public DataCollection $estimatedPrice
    ) {
    }
}
