<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum PolylineEncoding: string
{
    case POLYLINE_ENCODING_UNSPECIFIED = 'POLYLINE_ENCODING_UNSPECIFIED';
    case ENCODED_POLYLINE = 'ENCODED_POLYLINE';
    case GEO_JSON_LINESTRING = 'GEO_JSON_LINESTRING';
}
