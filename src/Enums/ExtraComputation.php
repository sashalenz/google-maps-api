<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum ExtraComputation: string
{
    case EXTRA_COMPUTATION_UNSPECIFIED = 'EXTRA_COMPUTATION_UNSPECIFIED';
    case TOLLS = 'TOLLS';
    case FUEL_CONSUMPTION = 'FUEL_CONSUMPTION';
    case TRAFFIC_ON_POLYLINE = 'TRAFFIC_ON_POLYLINE';
}
