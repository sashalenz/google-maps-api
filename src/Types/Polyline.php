<?php

namespace Sashalenz\GoogleMapsApi\Types;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Polyline extends Data
{
    public function __construct(
        public string $encodedPolyline,
//        TODO: object (Struct format) Specifies a polyline using the GeoJSON LineString format
        public Optional|array $geoJsonLinestring
    ) {
    }
}
