<?php

namespace Sashalenz\GoogleMapsApi\ResponseData;

use Sashalenz\GoogleMapsApi\Types\FallbackInfo;
use Sashalenz\GoogleMapsApi\Types\GeocodingResults;
use Sashalenz\GoogleMapsApi\Types\Route;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class ComputeRoutesResponse extends Data
{
    public function __construct(
        #[DataCollectionOf(Route::class)]
        public Optional|DataCollection $routes,
        #[DataCollectionOf(GeocodingResults::class)]
        public Optional|DataCollection $geocodingResults,
        public Optional|FallbackInfo $fallbackInfo
    ) {
    }
}
