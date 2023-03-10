<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum RouteTravelMode: string
{
    case TRAVEL_MODE_UNSPECIFIED = 'TRAVEL_MODE_UNSPECIFIED';
    case DRIVE = 'DRIVE';
    case BICYCLE = 'BICYCLE';
    case WALK = 'WALK';
    case TWO_WHEELER = 'TWO_WHEELER';
}
